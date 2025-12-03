<?php

/**
 * 
 */
class City {
	
	public $name;
	public $population;

	function __construct($name, $population) {
		$this->name 		= $name;
		$this->population 	= $population;
	}
}

$arr = [
	$city1 = new City('msk', 1000),
	$city2 = new City('asd', 2000),
	$city3 = new City('qwe', 3000),
];

foreach ($arr as $key => $value) {
	echo $value->name . ' ' . $value->population . '<p>';
}