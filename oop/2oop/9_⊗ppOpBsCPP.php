<?php

class Employee {

	public $name;
	public $age;
	public $salary;


	public function __construct($name, $salary) {
		$this->name = $name;
		$this->salary = $salary;
	}

	public function getName() {
		return $this->name;
	}

	public function getSalary() {
		return $this->salary;
	}

	public function upSalary() {
		return $this->salary*1.1;
	}
}

$employee = new Employee('name', 2000);
echo $employee->getName();
echo $employee->getSalary();
echo $employee->upSalary();