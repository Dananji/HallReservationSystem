<?php
/**
 * EventFixture
 *
 */
class EventFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'hID' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'event_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'time_begin' => array('type' => 'time', 'null' => true, 'default' => null),
		'begin_meridiem' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'time_end' => array('type' => 'time', 'null' => true, 'default' => null),
		'end_meridiem' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'hID' => array('column' => 'hID', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'hID' => 'Lor',
			'name' => 'Lorem ipsum dolor sit amet',
			'event_date' => '2013-10-13',
			'time_begin' => '07:48:34',
			'begin_meridiem' => 'am',
			'time_end' => '07:48:34',
			'end_meridiem' => 'pm',
			'modified' => '2013-10-13 07:48:34'
		),
	);

}
