<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'user';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'uID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'username' => array(
			'required' => array(
                            'rule' => array('nonEmpty'),
                            'message' => 'Username is required'
                        )
		),
		'password' => array(
			'required' => array(
                            'rule' => array('nonEmpty'),
                            'message' => 'Password is required'
                        )
		),
		'role' => array(
			'valid' => array(
                            'rule' => array('inList', array('admin', 'user')),
                            'message' => 'Please enter a valid role',
                            'allowEmpty' => false,
                        )
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
        
        public function beforeSave($options = array()) {
//            parent::beforeSave($options);
            if(isset($this->data[$this->alias]['password'])) {
                $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
            }
            return true;
        }
}