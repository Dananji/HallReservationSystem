<?php

App::uses('DepartmentsController', 'Controller');

/**
 * DepartmentsController Test Case
 *
 */
class DepartmentsControllerTest extends ControllerTestCase {

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
