<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

/**
 * testMatchPasswords method
 *
 * @return void
 */
	public function testMatchPasswords() {
            $tmp = array(
              'User' => array(
                  'password' => sha1(uniqid('password', true))
              )  
            );
            $result = $this->User->matchPasswords($tmp);
            $this->assertTrue($result);
	}
}
