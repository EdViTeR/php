<?php

/**
 * 
 */
class Employee {
	
	private $name;
	private $age;
	private $salary;

	public function getName() {
		return $this->name;
	}

	public function getAge() {
		return $this->age;
	}

	public function getSalary() {
		return $this->salary . '$';
	}

	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	public function setAge($age) {
		if ($age <= 120 && $age >= 0) {
			$this->age = $age;
		} else {
			echo 'Некорректный возраст';
		}
		return $this;
	}

	public function setSalary($salary) {
		$this->salary = $salary;
		return $this;
	}
}

$employee = new Employee();
$employee->setName('qwe')->setAge(23)->setSalary(2000);
echo $employee->getName();
echo $employee->getAge();
echo $employee->getSalary();
