<?php
App::uses('UsersController', 'Controller');

/**
 * UsersController Test Case
 *
 */
class UsersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user'
	);

/**
 * testLogin method
 *
 * @return void
 */
	public function testLogin() {
            $UsersController = $this->generate('Users', array(
                    'components' => array(
                        'Auth' => array('user')
                    ) 
                 )
            );
            $UsersController->Auth->staticExpects($this->once())
                    ->method('user')
                    ->with('id')
                    ->will($this->returnValue(2));
            $this->testAction('users/edit/2', array('method' => 'get'));
	}

/**
 * testLogout method
 *
 * @return void
 */
	public function testLogout() {
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
            $result = $this->testAction('/users/index');
            debug($result);            
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
            $result = $this->testAction('/users/view');
            debug($result);
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
            $result = $this->testAction('/users/add');
            debug($result);
            $tmp =array(
                'User' => array(
                    'uID' => '5',
                    'name' => 'Kamal',
                    'username' => 'kamal123',
                    'password' => 'kamal',
                    'password_confirmation' => 'kamal',
                    'email' => 'kamal@gmail.com'
                )
            );
            $result = $this->testAction('users/add', array('data' => $tmp, 'method', 'post'));
            debug($result);
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
            $result = $this->testAction('/users/edit');
            debug($result);
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
            $result = $this->testAction('/users/index');
            debug($result);
	}

}
