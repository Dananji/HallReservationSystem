<?php
/**
 * HallInfoFixture
 *
 */
class HallInfoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'hall_info';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'hID' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hall_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cap_min' => array('type' => 'integer', 'null' => false, 'default' => null),
		'cap_max' => array('type' => 'integer', 'null' => false, 'default' => null),
		'dep_code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'location' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hall_description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reserved' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'hID' => array('column' => 'hID', 'unique' => 1),
			'dep_code' => array('column' => 'dep_code', 'unique' => 0)
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
			'id' => 1,
			'hID' => 'LOR01',
			'hall_name' => 'Lorem ipsum dolor sit amet',
			'cap_min' => 50,
			'cap_max' => 100,
			'dep_code' => 'Lor',
			'location' => 'Lorem ipsum dolor sit amet',
			'hall_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'reserved' => 1
		),
	);

}
