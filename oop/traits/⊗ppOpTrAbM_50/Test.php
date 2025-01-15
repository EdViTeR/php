<?php
require_once 'TestTrait.php';

/**
 * №1
 */
class Test {
	
	use TestTrait;

	// public function method2() {
		// return 2;
	// }

}

$test = new Test;
echo $test->method1();
echo $test->method2();