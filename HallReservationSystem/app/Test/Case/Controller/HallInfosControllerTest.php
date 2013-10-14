<?php
App::uses('HallInfosController', 'Controller');

/**
 * HallInfosController Test Case
 *
 */
class HallInfosControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hall_info'
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
                'HallInfo' => array(
                    'hID' => 'CS001',
                    'hall_name' => 'Seminar Room',
                    'cap_min' => '50',
                    'cap_max' => '100',
                    'dep_code' => 'CS',
                    'location' => 'Sumanadasa Building, 2nd Floor',
                    'hall_description' => 'Over head projector with comfortable seatings.',
                    'reserved' => false
                )
            );
            $result = $this->testAction('hallinfos/add', array('data' => $tmp, 'method', 'post'));
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
