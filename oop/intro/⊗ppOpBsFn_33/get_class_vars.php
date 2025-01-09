<?php

/**
 * №5 получаем свойства класса
 */
class Test {

	public $prop1;
	public $prop2;
	private $prop3;
	private $prop4;

	// №7
	function __construct() {
		var_dump(get_class_vars('Test'));
	}
}

$a = new Test;
// №6
var_dump(get_class_vars('Test')); die;