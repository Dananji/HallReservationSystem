<?php
App::uses('ReservationTime', 'Model');

/**
 * ReservationTime Test Case
 *
 */
class ReservationTimeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reservation_time'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ReservationTime = ClassRegistry::init('ReservationTime');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReservationTime);

		parent::tearDown();
	}

}
