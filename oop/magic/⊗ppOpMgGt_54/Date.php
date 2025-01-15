<?php

/**
 * №2
 */
class Date {
	
	public $year;
	public $month;
	public $day;

	function __construct($year, $month, $day) {
		$this->year 	= $year;
		$this->month 	= $month;
		$this->day 		= $day;
	}

	function __get($property) {
		if ($property == 'fulldate') {
			return date("l", mktime(0,0,0,date($this->month),date($this->day),date($this->year)));
		}
	}
}

$date = new Date('2024', '12', '27');
echo $date->fulldate;