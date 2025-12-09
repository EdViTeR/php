<?php

trait Trait1 {
	private function method1() {
		return 1;
	} 
}

trait Trait2 {
	use Trait1;

	private function method2() {
		return 2;
	}
}

class Test {

	use Trait2;

	public function getSum() {
		return $this->method1() + $this->method2();
	}
}

$test = new Test;
echo $test->getSum();