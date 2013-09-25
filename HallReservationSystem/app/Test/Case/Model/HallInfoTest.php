<?php
App::uses('HallInfo', 'Model');

/**
 * HallInfo Test Case
 *
 */
class HallInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hall_info'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HallInfo = ClassRegistry::init('HallInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HallInfo);

		parent::tearDown();
	}

}
