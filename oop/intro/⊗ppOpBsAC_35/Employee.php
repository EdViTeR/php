<?php
require_once 'User.php';

/**
 * №1
 */
class Employee extends User {
	
	private $salary;

	public function getSalary() {
		return $this->salary;
	}

	public function setSalary($salary) {
		$this->salary = $salary;
	}

	public function increaseRevenue($value) {
		$this->salary = $this->salary + $value;
	}

	public function decreaseRevenue($value) {
		$this->salary = $this->salary - $value;
	}
}

$employee = new Employee;
$employee->setName('eric');
$employee->setSalary(12300);
echo $employee->getName();
echo $employee->getSalary();
$employee->increaseRevenue(1000);
echo $employee->getSalary();
$employee->decreaseRevenue(2000);
echo $employee->getSalary();