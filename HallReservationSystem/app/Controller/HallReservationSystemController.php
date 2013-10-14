<?php

App::uses('AppController', 'Controller');
include_once '../Lib/Database.php';

class HallReservationSystemController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->db = new Database();
    }

    public function index() {
        if ($this->request->is('post')) {
            if ($this->data['task'] == 'reserve') {
                $this->redirect(array('controller' => 'makereservation', 'action' => 'index'));
//            session_start();
            }
            if ($this->data['task'] == 'cancel') {
                $this->redirect(array('controller' => 'cancelreservation', 'action' => 'index'));
//            session_start();
            }
        }
    }
    
    public function home() {
        
    }

}

?>
