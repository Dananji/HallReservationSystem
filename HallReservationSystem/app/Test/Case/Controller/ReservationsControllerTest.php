<?php
App::uses('ReservationsController', 'Controller');

/**
 * ReservationsController Test Case
 *
 */
class ReservationsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reservation'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
            $tmp =array(
                'Reservation' => array(
                    'uID' => '2',
                    'date' => '2013-09-20',
                    'time' => '08:00:00',
                    'meridiem' => 'am',
                    'description' => 'Rotaract Induction',
                    'hID' => 'CS001',
                    'reservation_locked' => false
                )
            );
            $result = $this->testAction('reservations/add', array('data' => $tmp, 'method', 'post'));
            debug($result);
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
            
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}

}
