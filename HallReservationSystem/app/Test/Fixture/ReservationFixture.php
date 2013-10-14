<?php
/**
 * ReservationFixture
 *
 */
class ReservationFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'reservation';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'rID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'uID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'index'),
		'begin_time' => array('type' => 'time', 'null' => false, 'default' => null, 'key' => 'index'),
		'begin_meridiem' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'end_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'end_meridiem' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hID' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mail_sent' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'indexes' => array(
			'PRIMARY' => array('column' => 'rID', 'unique' => 1),
			'hID' => array('column' => 'hID', 'unique' => 0),
			'date' => array('column' => 'date', 'unique' => 0),
			'uID' => array('column' => 'uID', 'unique' => 0),
			'begin_time' => array('column' => 'begin_time', 'unique' => 0)
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
			'rID' => 1,
			'uID' => 1,
			'date' => '2013-10-13',
			'begin_time' => '07:51:10',
			'begin_meridiem' => 'am',
			'end_time' => '07:51:10',
			'end_meridiem' => 'pm',
			'hID' => 'LOR01',
			'description' => 'Lorem ipsum dolor sit amet',
			'mail_sent' => 1
		),
	);

}
