<?php
require_once 'iEmployee.php';

/**
 * 
 */
class Employee implements iEmployee {
	
	private $salary;
	private $name;
	private $age;

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getage() {
		return $this->age;
	}

	public function setAge($age) {
		$this->age = $age;
	}

	public function getSalary() {
		return $this->salary;
	}

	public function setSalary($salary) {
		$this->salary = $salary;
	}
}

$employee = new Employee();
$employee->setName('eric');
$employee->setAge('25');
$employee->setSalary(1000);
echo $employee->getSalary();