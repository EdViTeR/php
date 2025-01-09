<?php

/**
 * №2
 */
class Test1 {
	
	public $name;

	function __construct($name) {
		$this->name = $name;
	}
}

class Test2 {
	
	public $name;

	function __construct($name) {
		$this->name = $name;
	}
}

$arr = [
	$obj1 = new Test1('q'),
	$obj2 = new Test2('w'),
	$obj3 = new Test2('e'),
	$obj4 = new Test2('r'),
	$obj5 = new Test1('t'),
	$obj6 = new Test2('y'),
];

foreach ($arr as $key => $value) {
	echo get_class($value) . '|' . $value->name . '</p>';
}