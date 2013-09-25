<?php
App::uses('MakeReservationController', 'Controller');

/**
 * MakeReservationController Test Case
 *
 */
class MakeReservationControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.make_reservation'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
            $this->assertNoText("Error:");
            $result = $this->testAction('MakeReservation/index');
            debug($result);
	}

/**
 * testSelectHall method
 *
 * @return void
 */
	public function testSelectHall() {
            $this->assertNoText("Error:");
            $result = $this->testAction('MakeReservation/selecthall');
            debug($result);
	}

/**
 * testReservationDetails method
 *
 * @return void
 */
	public function testReservationDetails() {
            $this->assertNoText("Error:");
            $result = $this->testAction('MakeReservation/reservationdetails');
            debug($result);
	}

/**
 * testConfirmation method
 *
 * @return void
 */
	public function testConfirmation() {
            $this->assertNoText("Error:");
            $result = $this->testAction('MakeReservation/confirmation');
            debug($result);
	}

/**
 * testError method
 *
 * @return void
 */
	public function testError() {
            $this->assertNoText("Error:");
            $result = $this->testAction('MakeReservation/error');
            debug($result);
	}

/**
 * testSuccess method
 *
 * @return void
 */
	public function testSuccess() {
            $this->assertNoText("Error:");
            $result = $this->testAction('MakeReservation/success');
            debug($result);
	}

}
