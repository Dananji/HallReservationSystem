<?php

App::uses('AppController', 'Controller');
include_once '../Lib/Database.php';

class HallReservationSystemController extends AppController {
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->db = new Database();
    }
    
//    public function choose() {}

        public function index() {
        if(!isset($departments)) {
            $sql = "select dep_name from department order by dep_name";
            $query = $this->db->prepare($sql);
            $query->execute();
            $departments = $query->fetchAll(PDO::FETCH_COLUMN);
            $this->set('departments', $departments);
        }
        if($this->request->is('post')) {
            $department = $departments[$this->data['departments']];
            $capacity = $this->data['capacity'];
            $date = $this->data['date'];
            $time = $this->data['time'];
            $this->Session->write('departments', $department);
            $this->Session->write('capacity', $capacity);
            $this->Session->write('date', $date);
            $this->Session->write('time', $time);
            $this->redirect(array('action' => 'selecHall'));
        }
    }
    //add user details
    public function selectHall($hallID = null, $hallName = null, $location = null, $capacity = null, $email = null, $firstName = null, $lastName = null) {
        if($this->request->is('get')) {
            $capacity = $this->Session->read('capacity');
            $date = $this->Session->read('date');
            $time = $this->Session->read('time');
            $departments = $this->Session->read('departments');
            $dateToString = $date['year'] . "-" . $date['month'] . "-" . $date['day'];
            $timeToString = $time['hour'] . "-" . $time['minute'] . "-" . $time['second'];
            $sql = "SELECT hID, hall_name, location
                FROM hall_info
                JOIN department ON ( department.dep_code = hall_info.dep_code ) 
                WHERE hall_info.dep_name =  ?
                AND ? BETWEEN hall_info.cap_min AND hall_info.cap_max 
                AND hall_info.reserved = ?
                ORDER BY hall_info.hID";
            $query = $this->db->prepare($sql);
            $query->execute(array($departments, $capacity, false));
            $results = $query->fetchAll();
            $this->set('results', $results);
        }
        else {
            $this->Session->write('hallID', $hallID);
            $this->Session->write('hallName', $hallName);
            $this->Session->write('department', $departments);
            $this->Session->write('location', $location);
            $this->Session->write('capacity', $capacity);
            $this->Session->write('date', $date);
            $this->Session->write('time', $time);
            $this->redirect(array('action' => 'reservationDetails'));
        }
    }
    
    public function reservationDetails() {
        if($this->request->is('post')) {
            $this->Session->write('description', $this->data['description']);
            $this->redirect(array('action' => 'Confirmation'));
        }
    }
    
    public function confirmation() {
        
    }
}

?>
