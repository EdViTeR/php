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

$employee = new Employee('qwe', 1234, 'rrr');

$arr = [
	'prop1' => 'name',
	'prop2' => 'salary', 
	'prop3' => 'position'
];

echo $employee->{$arr['prop1']};
?>