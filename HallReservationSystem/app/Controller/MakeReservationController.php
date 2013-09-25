<?php

App::uses('AppController', 'Controller');
include_once '../Lib/Database.php';

class MakeReservationController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->db = new Database();
    }

    //index action for reservation making
    public function index() {
        if (!isset($departments) || !isset($from) || !isset($to)) {
            //retrieving the data from the database for dropdown options
            $sql = "SELECT dep_name FROM department ORDER BY dep_name";
            $query = $this->db->prepare($sql);
            $query->execute();
            $departments = $query->fetchAll(PDO::FETCH_COLUMN);
            $this->set('departments', $departments);
            $sql = "SELECT DISTINCT begin_time FROM reservation_times ORDER BY tID";
            $query = $this->db->prepare($sql);
            $query->execute();
            $from = $query->fetchAll(PDO::FETCH_COLUMN);
            $this->set('from', $from);
            $sql = "SELECT DISTINCT end_time FROM reservation_times ORDER BY tID";
            $query = $this->db->prepare($sql);
            $query->execute();
            $to = $query->fetchAll(PDO::FETCH_COLUMN);
            $this->set('to', $to);
        }

        //post method to insert data into the session
        if ($this->request->is('post')) {
            $department = $departments[$this->data['department']];
            $capacity = $this->data['capacity'];
            $date = $this->data['date'];
            $from = $from[$this->data['from']];
            $begin_meridiem = $this->data['type_begin'];
            $end_meridiem = $this->data['type_end'];
            $to = $to[$this->data['to']];
            $this->Session->write('department', $department);
            $this->Session->write('capacity', $capacity);
            $this->Session->write('date', $date);
            $this->Session->write('from', $from);
            $this->Session->write('to', $to);
            $this->Session->write('begin', $begin_meridiem);
            $this->Session->write('end', $end_meridiem);
            $this->redirect(array('action' => 'selectHall'));
        }
    }

    //select hall function
    public function selectHall($hallID = null, $hallName = null, $location = null, $capacity = null) {
        if ($this->request->is('get')) {
            $capacity = $this->Session->read('capacity');
            $date = $this->Session->read('date');
            $from = $this->Session->read('from');
            $dateTime = $date . $from;
            // converting the date array into a string 
            $dateString = $date['year'] . '-' . $date['month'] . '-' . $date['day'];
            $this->Session->write('date', $dateString);
            $departments = $this->Session->read('department');
            $sql = "SELECT CAST( CONCAT_WS(  ' ', reserve_date, reserve_time_start  ) AS datetime ) FROM reserved_hall";
            $query = $this->db->prepare($sql);
            $result = $query->execute();
            $this->set('result', $result);
            //SQL statement to retreive data from the database according to the user specifications
            $sql = "SELECT hID, hall_name, location
                    FROM hall_info
                    WHERE hID
                    IN (
                    SELECT DISTINCT hall_info.hID
                    FROM hall_info, reserved_hall
                    WHERE hall_info.hID NOT 
                    IN (
                    SELECT hID
                    FROM reserved_hall
                    WHERE reserved_hall.reserve_date = ?
                    )
                    )
                    AND ? 
                    BETWEEN cap_min
                    AND cap_max
                    AND hall_info.dep_code = ( 
                    SELECT dep_code
                    FROM department
                    WHERE dep_name =  ? ) 
                    ORDER BY hall_info.hID";
            $query = $this->db->prepare($sql);
            $query->execute(array($dateString, $capacity, $departments));
            $results = $query->fetchAll();
            $this->set('results', $results);
        } else {
            $this->Session->write('hallID', $hallID);
            $this->Session->write('hallName', $hallName);
            $this->Session->write('location', $location);
            $this->Session->write('dateTime', $dateTime);
            $this->redirect(array('action' => 'reservationDetails'));
        }
    }

    public function reservationDetails() {
        //posting the data into the session entered by the user
        if ($this->request->is('post')) {
            $this->Session->write('first_name', $this->data['first name']);
            $this->Session->write('last_name', $this->data['last name']);
            $this->Session->write('email', $this->data['email']);
            $this->Session->write('description', $this->data['reservation_description']);
            $this->redirect(array('action' => 'Confirmation'));
        }
    }

    public function confirmation() {
        if ($this->request->is('post')) {
            try {
                //begin transaction
                $this->db->beginTransaction();
                $first_name = $this->Session->read('first_name');
                $last_name = $this->Session->read('last_name');
                $email = $this->Session->read('email');
                $sql = "SELECT uID FROM users WHERE email =  ? ";
                $query = $this->db->prepare($sql);
                $query->execute(array($email));
                $result = $query->fetchAll();
                //if it is a valid user then continue with the transaction
                if ($result != null) {
                    $description = $this->Session->read('description');
                    $date = $this->Session->read('date');
                    $time_start = $this->Session->read('from');
                    $begin_meridiem = $this->Session->read('begin');
                    $time_end = $this->Session->read('to');
                    $end_meridiem = $this->Session->read('end');
                    $hID = $this->Session->read('hallID');
                    $dateTime = $this->Session->read('dateTime');
                    $sql = "INSERT INTO reservation(uID, date, begin_time, begin_meridiem, end_time, end_meridiem, hID, description, reservation_locked) SELECT users.uID,?,?,?,?,?,?,?,?  FROM users WHERE email = ?";
                    $query = $this->db->prepare($sql);
                    $db_status = $query->execute(array($date, $time_start, $begin_meridiem, $time_end, $end_meridiem, $hID, $description, false, $email));
                    //check database status
                    if (!$db_status) {
                        $this->db->query("rollback");
                        $this->redirect(array('action' => 'error'));
                    }
                    $sql = "SELECT rID FROM reservation WHERE date = ? AND begin_time = ? AND begin_meridiem = ? AND description = ? AND hID = ? AND reservation_locked = ? ";
                    $query = $this->db->prepare($sql);
                    $db_status = $query->execute(array($date, $time_start, $begin_meridiem, $description, $hID, false));
                    if (!$db_status) {
                        $this->db->query("rollback");
                        $this->redirect(array('action' => 'error'));
                    }
                    $sql = "INSERT INTO reserved_hall(hID, reserve_time_start, reserve_time_end, reserve_date, reserved) VALUES (?,?,?,?,?)";
                    $query = $this->db->prepare($sql);
                    $db_status = $query->execute(array($hID, $time_start, $time_end, $date, true));
                    if (!$db_status) {
                        $this->db->query("rollback");
                        $this->redirect(array('action' => 'error'));
                    }
                }
                //commit to the database at the end of the transaction
                $this->db->commit();
                $this->redirect(array('action' => 'success'));
            } catch (PDOException $ex) {
                $this->db->query("rollback");
                $this->redirect(array('action' => 'error'));
            }
        }
    }

    public function error() {
        
    }

    public function success() {
        
    }

}

?>
