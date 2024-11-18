<?php
require_once 'User.php';

/**
 * №1
 */
class Employee extends User {
	
	public function getSalary() {
		return $this->salary;
	}

	public function setSalary($salary) {
		$this->salary = $salary;		
	}
}

$employee = new Employee;
$employee->setSalary(1000);
$employee->setName('john');
$employee->setAge(25);
echo $employee->getSalary();
echo $employee->getName();
echo $employee->getAge();

?>