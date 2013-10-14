<?php
 
/**
* Example controller for the Calendar Helper
*
*	Copyright 2008 John Elliott
* Licensed under The MIT License
* Redistributions of files must retain the above copyright notice.
*
*
* @author John Elliott
* @copyright 2008 John Elliott
* @link http://www.flipflops.org More Information
* @license			http://www.opensource.org/licenses/mit-license.php The MIT License
*
*/
 
uses('sanitize');
 
class EventsController extends AppController {
 
	var $name = 'Events';
	var $helpers = array('Html', 'Form', 'Calendar');
 
	/**
	* the idea is that the calendar helper itself is purely a shell
	* the calendar will just display whatever is sent to it
	* anything you want to do to it is put togthere here in the controller or in a component when I get around to writing it
	*
	* @param $year string
	* @param $month string
	*
	**/
 
	function calendar($year = null, $month = null) {
 
		$this->Event->recursive = 0;
 
		$month_list = array('january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december');
		$day_list = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
		$base_url = $this->webroot . 'events/calendar'; // NOT not used in the current helper version but used in the data array
		$view_base_url = $this->webroot. 'events';
 
		$data = null;
 
		if(!$year || !$month) {
			$year = date('Y');
			$month = date('M');
			$month_num = date('n');
			$item = null;
		}
 
		$flag = 0;
 
		for($i = 0; $i < 12; $i++) { // check the month is valid if set
			if(strtolower($month) == $month_list[$i]) {
				if(intval($year) != 0) {
					$flag = 1;
					$month_num = $i + 1;
					$month_name = $month_list[$i];
					break;
				}
			}
		}
 
		if($flag == 0) { // if no date set, then use the default values
			$year = date('Y');
			$month = date('M');
			$month_name = date('F');
			$month_num = date('m');
		}
 
		$fields = array('id', 'name', 'DAY(event_date) AS event_day');
 
		$var = $this->Event->findAll('MONTH(Event.event_date) = ' . $month_num . ' AND YEAR(Event.event_date) = ' . $year, $fields, 'Event.event_date ASC');
 
		/**
		* loop through the returned data and build an array of 'events' that is passes to the view
		* array key is the day of month 
		*
		*/
 
		foreach($var as $v) {
 
			if(isset($v[0]['event_day'])) {
 
				$day = $v[0]['event_day'];
 
				if(isset($data[$day])) {
					$data[$day] .= '<br /><a href="' . $view_base_url . '/view/' . $v['Event']['id'] . '">' . $v['Event']['name'] . '</a>';
				} else {
					$data[$day] = '<a href="' . $view_base_url . '/view/' . $v['Event']['id'] . '">' . $v['Event']['name'] . '</a>';
				}
			}
		}
 
		$this->set('year', $year);
		$this->set('month', $month);
		$this->set('base_url', $base_url);
		$this->set('data', $data);
 
	}
}
 
 
?>