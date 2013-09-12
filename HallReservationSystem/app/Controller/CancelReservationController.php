<?php

App::uses('AppController', 'Controller');
include_once '../Lib/Database.php';

class CancelReservationController extends AppController {
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->db = new Database();
    }

        public function index($hallID = null, $description = null, $date = null, $time = null) {
        if($this->request->is('get')) {
            $sql = "SELECT hID, description, date, time
                    FROM reservation
                    WHERE uID =  ?
                    ";  
            $query = $this->db->prepare($sql);
            $query->execute(array($current_user['uID']));
            $results = $query->fetchAll();
            $this->set('results', $results);
        }
        else {
            $this->Session->write('hallID', $hallID);
            $this->Session->write('description', $description);
            $this->Session->write('date', $date);
            $this->Session->write('time', $time);
        }
    }
    
}

?>