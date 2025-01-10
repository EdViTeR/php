<?php

/**
 * №11 Проверяет, существует ли метод в данном классе
 */
class Test {

	public function method1() {
		return 1;
	}
}

// $test = new Test;
// var_dump(method_exists($test, 'method1'));
// var_dump(method_exists($test, 'method2'));

// №12
echo '<a href="method_exists.php?class=Test&fun=method1">Проверка</a>';
$class 	= @$_GET['class'];
$fun 	= @$_GET['fun'];
if (class_exists($class)) {
	if (method_exists($class, $fun)) {
		$test = new $class;
		echo $test->$fun();
	}
}