<?php

/**
 * 
 */
class Employee {
	
	private $name;
	private $salary;

	function __construct($name, $salary) {
		$this->name = $name;
		$this->salary = $salary;
	}

	function getSum() {
		return $this->addSign($this->salary);
	}

	private function addSign($salary) {
		return $salary.'$';
	}
}

$employee = new Employee('asd', 2000);
echo $employee->getSum();
// echo $employee->addSign(123);