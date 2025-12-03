<?php

//
class User {

	private $name;
	private $age;

    public function setName($name) {
    	$this->name = $name;
    }

    public function getName() {
    	return $this->name;
    }

    public function setAge($age) {
    	$this->age = $age;
    }

    public function getAge() {
    	return $this->age;
    }	
}

//27
class Employee extends User {

	private $salary;
	private $age;

	public function setSalary($salary) {
		$this->salary = $salary;
	}

	public function getSalary() {
		return $this->salary;
	}

	public function setAge($age) {
		if ($age >= 18 && $age <= 65) {
			parent::setAge($age);
		} else {
			return 'Не тот возраст';
		}
	}
}

$employee = new Employee();
$employee->setName('asd');
// echo $employee->getName();
$employee->setSalary(1234);
// echo $employee->getSalary();
$employee->setAge(22);
echo $employee->getAge();
