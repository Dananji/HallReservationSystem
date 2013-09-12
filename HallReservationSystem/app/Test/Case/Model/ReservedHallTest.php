<?php
App::uses('ReservedHall', 'Model');

/**
 * ReservedHall Test Case
 *
 */
class ReservedHallTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reserved_hall'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ReservedHall = ClassRegistry::init('ReservedHall');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReservedHall);

		parent::tearDown();
	}

}
