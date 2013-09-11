<?php

App::uses('AppModel', 'Model');

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
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'uID';

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
            'notempty' => array(
                'rule' => array('between', 5, 15),
                'message' => 'Username must be between 5 to 15 characters',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'That username has been taken' => array(
                'rule' => 'isUnique',
                'message' => 'Username is already taken'
            )
        ),
        'password' => array(
            'Password, minimum length is 5' => array(
                'rule' => array('between', 5, 100),
                //'message' => 'Your custom message here',
                'allowEmpty' => false,
                'required' => true,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'role' => array(
            'notempty' => array(
                'rule' => array('option', 'admin' => 'Admin', 'user' => 'User'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                'required' => true,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'Please enter a valid email address',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

}
