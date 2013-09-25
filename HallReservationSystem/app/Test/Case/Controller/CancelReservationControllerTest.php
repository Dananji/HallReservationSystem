<?php
App::uses('CancelReservationController', 'Controller');

/**
 * CancelReservationController Test Case
 *
 */
class CancelReservationControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cancel_reservation'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
            $result = $this->testAction('/cancelReservation/index');
            $debug($result);
	}

}
