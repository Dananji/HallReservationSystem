<?php
App::uses('AppModel', 'Model');
/**
 * Department Model
 *
 */
class Department extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'department';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'dep_code' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dep_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
