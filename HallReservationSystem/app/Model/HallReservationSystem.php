<?php
App::uses('AppModel', 'Model');
/**
 * Reservation Model
 *
 */
class HallReservationSystem extends AppModel {
    
	public $useTable = 'reservation';
	public $primaryKey = 'rID';

        public function save($data = array(
            HallReservationSystem => array(
                
            )
        ), $validate = true, $fieldList = array()) {
            parent::save($data, $validate, $fieldList);
        }
        
}
