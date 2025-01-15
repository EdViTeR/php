<?php
require_once 'Trait1.php';
require_once 'Trait2.php';
require_once 'Trait3.php';

/**
 * №3
 */
class Test {
	use Trait1;
	use Trait2;
	use Trait3;

	public function getSum() {
		return $this->method1() + $this->method2() + $this->method3();
	}
}

$test = new Test();
echo $test->getSum();