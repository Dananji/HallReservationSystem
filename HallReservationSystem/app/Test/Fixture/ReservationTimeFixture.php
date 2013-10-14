<?php
/**
 * ReservationTimeFixture
 *
 */
class ReservationTimeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'tID' => array('type' => 'integer', 'null' => false, 'default' => null),
		'begin_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'begin_meridiem' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'end_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'end_meridiem' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'tID' => 1,
			'begin_time' => '07:55:09',
			'begin_meridiem' => 'am',
			'end_time' => '07:55:09',
			'end_meridiem' => 'pm'
		),
	);

}
