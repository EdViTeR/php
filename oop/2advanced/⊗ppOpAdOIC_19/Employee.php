<?php
require_once 'Departament.php';
require_once 'Position.php';

class Employee {
	public $name;
	public $position;
	public $department;

	public function __construct($name, $position, $department) {
		$this->name = $name;
		$this->position = $position;
		$this->department = $department;
	}
}

$department = new Departament('Кафедра');
$position = new Position('Препод');
$employee = new Employee('Валерик', $department, $position);
echo $employee->name . ' ' . $employee->department->name . ' ' . $employee->position->name;
?>