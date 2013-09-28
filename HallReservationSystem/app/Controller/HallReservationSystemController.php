<?php

App::uses('AppController', 'Controller');
include_once '../Lib/Database.php';

class HallReservationSystemController extends AppController {
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->db = new Database();
    }    
    
    public function index() {
        $task = $this->data['task'];
        if($task == 'reserve') {
            $this->redirect(array('controller' => 'makereservation', 'action' => 'index'));
            session_start();
        }
        if($task == 'cancel') {
            $this->redirect(array('controller' => 'cancelreservation', 'action' => 'index'));
            session_start();
        } 
    }
    
}

?>
