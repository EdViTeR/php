<?php

$_GET['class'] = 'Test';
$_GET['method'] = 'method1';

class Test {

	public function method1() {
		return 1;
	}
}

var_dump(method_exists('Test', 'method1'));
var_dump(method_exists('Test', 'method2'));

if (method_exists($_GET['class'], $_GET['method'])) {
	echo (new Test)->method1();
} else {
	echo 'Метода ' . $_GET['method'] . ' в классе ' . $_GET['class'] . ' не существует';
}
