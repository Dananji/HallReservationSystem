<?php

App::uses('AppController', 'Controller');
include_once '../Lib/Database.php';

class HallReservationSystemController extends AppController {
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->db = new Database();
    }
    
    public function choose() {}

        public function index() {
        if(!isset($departments)) {
            $sql = "select dept_name from department order by dept_name";
            $query = $this->db->prepare($sql);
            $query->execute();
            $departments = $query->fetchAll(PDO::FETCH_COLUMN);
            $this->set('departments', $departments);
        }
        if($this->request->is('post')) {
            $departments = $departments[$this->data['departments']];
            $capacity = $this->data['capacity'];
            $date = $this->data['date'];
            $time = $this->data['time'];
            $this->Session->write('departments', $departments);
            $this->Session->write('capacity', $capacity);
            $this->Session->write('date', $date);
            $this->Session->write('time', $time);
            $this->redirect(array('action' => 'selecHall'));
        }
    }
    
    public function selectHall() {
        if($this->request->is('get')) {
            $capacity = $this->Session->read('capacity');
            $date = $this->Session->read('date');
            $time = $this->Session->read('time');
            $departments = $this->Session->read('departments');
            $dateToString = $date['year'] ."-" . $date['month'] . "-" . $date['day'];
            $timeToString = $time['']
        }
        
    }
}

?>
