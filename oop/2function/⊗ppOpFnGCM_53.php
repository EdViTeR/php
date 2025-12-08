<?php

class Test {

	public function method1() {
		return 1;
	}

	public function method2() {
		return 2;
	}

	public function method3() {
		return 3;
	}
}

print_r(get_class_methods('Test'));
$test = new Test;

foreach (get_class_methods($test) as $key => $value) {
	print_r($test->$value());
}
?>