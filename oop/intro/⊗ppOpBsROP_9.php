<?php

/**
 * №1
 */
class Employee {
	
	function __construct($name, $surname, $salary)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->salary = $salary;
	}
 	#№2
	public function getName() {
		return $this->name;
	}

	public function getSurname() {
		return $this->surname;
	}

	public function getSalary() {
		return $this->salary;
	}

	public function setSalary($salary) {
		$this->salary = $salary;
	}
}
$employee = new Employee('eric', 25, 3000);
echo $employee->name;
echo $employee->surname;
echo $employee->salary;
$employee->setSalary(2000);
echo $employee->salary;

echo '<br></br><a href="intro.php">Назад</a>';
?>