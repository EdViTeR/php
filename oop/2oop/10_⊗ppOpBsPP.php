<?php

class Employee {
	private $name;
	private $salary;
	private $age;

	function __construct($name, $salary, $age) {
		$this->name 	= $name;
		$this->salary 	= $salary;
		$this->age 		= $age;
	}

	public function getData() {
		return $this->name . ' ' . $this->salary . ' ' . $this->age;
	}
}

$employee = new Employee('asd', 2444, 23);
echo $employee->getData();