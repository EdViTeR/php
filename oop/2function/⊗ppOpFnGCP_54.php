<?php

class Test {
	public $prop1 = 1;
	public $prop2 = 2;
	public $prop3 = 3;
	public $prop4 = 4;

	public function __construct() {
		// print_r(get_class_vars('Test'));
	}
}

$a = new Test;
print_r(get_class_vars('Test'));