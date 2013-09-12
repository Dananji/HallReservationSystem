<?php
/**
 * ReservedHallFixture
 *
 */
class ReservedHallFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'reserved_hall';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'rhID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'hID' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reserve_time_start' => array('type' => 'time', 'null' => false, 'default' => null),
		'reserve_time_end' => array('type' => 'time', 'null' => false, 'default' => null),
		'reserve_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'reserved' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'rhID', 'unique' => 1)
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
			'rhID' => 1,
			'hID' => 'Lor',
			'reserve_time_start' => '10:27:24',
			'reserve_time_end' => '10:27:24',
			'reserve_date' => '2013-09-12',
			'reserved' => 1
		),
	);

}
