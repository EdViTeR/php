<?php
class Employee {
	public $name;
	public $salary;
	public $position;
	
	public function __construct($name, 
		$salary, $position) 
	{
		$this->name = $name;
		$this->salary = $salary;
		$this->position = $position;
	}
}

$employee = new Employee('qwe', 2000, 'rrr');
$arr = ['name', 'salary', 'position'];

foreach ($arr as $key => $value) {
	echo $employee->{$value};
}