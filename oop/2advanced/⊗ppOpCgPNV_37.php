<?php
class Employee {
	public $name;
	public $salary;
	
	public function __construct($name, $salary) {
		$this->name = $name;
		$this->salary = $salary;
	}
}
$employee = new Employee('qwe', 12300);
$prop1 = 'name';
$prop2 = 'salary';
echo $employee->$prop1;
echo $employee->$prop2;