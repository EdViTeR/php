<?php

/**
 * №3 возвращает массив названий методов
 */
class Test {
	
	public function method1() {
		return '1';
	}
	
	public function method2() {
		return '2';
	}
	
	public function method3() {
		return '3';
	}
}
// var_dump(get_class_methods('Test'));

// №4
$test = new Test;
$arr = get_class_methods($test);
foreach ($arr as $key => $value) {
	echo $test->$value();
}