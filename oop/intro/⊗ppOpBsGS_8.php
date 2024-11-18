<?php

/**
 * №1
 */
class Employee {
	
	private $name;
	private $age ;
	private $salary;

	#№2
	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getAge() {
		return $this->age;
	}

	public function setAge($age) {
		if ($this->isAgeCorrect($age)) {
			$this->age = $age;
		}
	}

	#№4
	public function getSalary() {
		return $this->salary . '$';
	}

	public function setSalary($salary) {
		$this->salary = $salary;
	}

	#№3
	private function isAgeCorrect($age) {
		if ($age >= 1 && $age <= 100) {
			return true;
		} else {
			return false;
		}
	}
}

$employee = new Employee;
$employee->setName('eric');
$employee->setSalary(1000);
$employee->setAge(23); 
echo $employee->getName();
echo $employee->getSalary();
echo $employee->getAge(); 

echo '<br></br><a href="intro.php">Назад</a>';
?>