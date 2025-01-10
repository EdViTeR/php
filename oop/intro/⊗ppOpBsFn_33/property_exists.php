<?php

/**
 * №13 Эта функция проверяет существование свойства вне зависимости от его доступности.
 */
#class Test {
#	
#	private $prop1;
#}
#
#$test = new Test;
#var_dump(property_exists($test, 'prop1'));
#var_dump(property_exists('Test', 'prop2'));

/**
 * №14
 */
class Arr {
	public $test1 = 1;
	public $test2 = 2;
	public $test4 = 4;
	public $test6 = 6;
	public $test7 = 7;
}

$arr = [
	'test1',
	'test2',
	'test3',
	'test4',
	'test5',
	'test6',
	'test7',
];

$class = new Arr();
foreach ($arr as $key => $value) {
	if (property_exists('Arr', $value)) {
		echo $class->$value;
	}
}