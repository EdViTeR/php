<?php
require_once 'Trait1.php';
require_once 'Trait2.php';
require_once 'Trait3.php';

/**
 * №2
 */
class Test {
	
	use Trait1, Trait2, Trait3 {
		Trait1::method insteadof Trait2, Trait3;
		Trait1::method as method1;
		Trait2::method as method2;
		Trait3::method as method3;
	}

	public function getSum() {
		return $this->method1() + $this->method2() + $this->method3();
	}
}

$test = new Test();
echo $test->getSum();