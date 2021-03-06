<?php

App::uses('AppController', 'Controller');
include_once '../Lib/Database.php';

class CancelReservationController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->db = new Database();
    }

    public function index($reserve = null, $hallID = null, $description = null, $date = null, $from = null, $to = null, $begin_meridiem = null, $end_meridiem = null) {
        if ($this->request->is('get')) {
            $userID = $this->Session->read('Auth.User.uID');
            $sql = "SELECT rID, hID, description, date, begin_time, end_time, begin_meridiem, end_meridiem
                    FROM reservation
                    WHERE uID = ?";
            $query = $this->db->prepare($sql);
            $query->execute(array($userID));
            $result = $query->fetchAll();
            $this->set('results', $result);
        } else {
            $this->Session->write('rID', $reserve);
            $this->Session->write('hallID', $hallID);
            $this->Session->write('description', $description);
            $this->Session->write('date', $date);
            $this->Session->write('from', $from);
            $this->Session->write('to', $to);
            $this->Session->write('begin', $begin_meridiem);
            $this->Session->write('end', $end_meridiem);
            $this->redirect(array('controller' => 'Reservations', 'action' => 'delete'));
        }
    }

    public function cancelRecord() {
        /* if ($this->request->is('delete')) {
          try {
          $this->db->beginTransaction();
          $hallID = $this->Session->read('hallID');
          $description = $this->Session->read('description');
          $date = $this->Session->read('date');
          $from = $this->Session->read('from');
          $to = $this->Session->read('to');
          $sql = "DELETE
          FROM reservation
          WHERE date =  ?
          AND begin_time =  ?
          AND end_time = ? ";
          //                $this->$db->rawQuery($sql);
          $query = $this->db->prepare($sql);
          $query->execute(array($date, $from, $to));
          $db_status = $query->fetchAll();
          if (!$db_status) {
          $this->db->query("rollback");
          $this->redirect(array('action' => 'error'));
          }
          $sql = "DELETE
          FROM reserved_hall
          WHERE reserve_date = ?
          AND reserve_time_start = ?
          AND reserve_time_end = ? ";
          $query = $this->db->prepare($sql);
          $db_status = $query->execute(array($date, $from, $to));
          if ($db_status) {
          $this->db->query("rollback");
          $this->redirect(array('action' => 'error'));
          }
          $this->db->commit();
          $this->redirect(array('action' => 'success'));
          } catch (PDOException $ex) {
          $this->db->query("rollback");
          $this->redirect(array('action' => 'error'));
          }
          } */
    }

    public function error() {
        
    }

    public function success() {
        
    }

}

?>