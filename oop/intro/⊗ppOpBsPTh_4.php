<?php

/**
 * №1
 */
class Employee {
	public $name;
	public $age;
	public $salary;

	#№2
	function getName() {
		return $this->name;
	}

	#№3
	function getAge() {
		return $this->age;
	}

	#№4
	function getSalary() {
		return $this->salary;
	}

	#№5
	function checkAge() {
		return ($this->age >= 18) ? true : false;
	}
}
$emp1 = new Employee();
$emp1->name = 'john';
$emp1->age = 25;
$emp1->salary = 1000;
echo $emp1->getName();
echo $emp1->getAge();
echo $emp1->getSalary() . '</br>';


$emp2 = new Employee();
$emp2->name = 'eric';
$emp2->age = 26;
$emp2->salary = 2000;
echo $emp2->getName();
echo $emp2->getAge();
echo $emp2->getSalary();

#№5
echo $emp1->checkAge() . '</br>';
echo $emp1->getSalary() + $emp2->getSalary();

echo '<br></br><a href="intro.php">Назад</a>';
?>