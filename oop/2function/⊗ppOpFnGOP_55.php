<?php

class Test {
	public $prop1;
	public $prop2;
	private $prop3;
	private $prop4;
}

$arr = new Test;
print_r(get_object_vars($arr));