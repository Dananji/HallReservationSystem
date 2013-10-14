<?php

App::uses('AppController', 'Controller');
include_once '../Lib/Database.php';

class FullCalendarController extends AppController {
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->db = new Database();
    }
    
    public function add() {
        
    }
}

?>