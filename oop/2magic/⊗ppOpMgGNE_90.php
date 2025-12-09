<?php

class Date {

	private $year = 2000;
	private $month = 11;
	private $day = 15;

	public function __get($property) {
		if ($property == 'weekDay') {
			return $this->day . '.' . $this->month . '.' . $this->year;
		}
	}
}

$date = new Date();
echo $date->weekDay;