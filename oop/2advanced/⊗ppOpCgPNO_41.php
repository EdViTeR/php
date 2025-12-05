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

class Data {
	public $prop1 = 'name';
	public $prop2 = 'salary';
	public $prop3 = 'position';
}

$employee = new Employee('qwwwwe', 1000, 'rrr');
$data = new Data();
echo $employee->{$data->prop1};