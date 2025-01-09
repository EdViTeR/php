<?php

/**
 * №8 получаем свойства класса
 */
class Test {

	public $prop1;
	public $prop2;
	private $prop3;
	private $prop4;
}

$a = new Test;
var_dump(get_object_vars($a)); die;