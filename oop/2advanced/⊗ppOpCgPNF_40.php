<?php

class Employee {
	public $name;
	public $salary;
	public $position;
	
	public function __construct($name, $salary, $position) {
		$this->name = $name;
		$this->salary = $salary;
		$this->position = $position;
	}
}

function getProp1() {
	return 'name';
}

function getProp2() {
	return 'salary';
}

$employee = new Employee('qwe', 123, 'www');
echo $employee->{getProp1()};
echo $employee->{getProp2()};