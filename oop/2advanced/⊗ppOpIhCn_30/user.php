<?php

//
class User {

	public $name;
	public $surn;

    function __construct($name, $surn) {
        $this->name = $name;
        $this->surn = $surn;
    }

    function getName() {
    	return $this->name;
    }

    function getSurn() {
    	return $this->surn;
    }
}

//
class Employee extends User {

    function __construct($name, $surn, $age, $salary) {
        parent::__construct($name, $surn);
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getAge() {
    	return $this->age;
    }

    public function getSalary() {
    	return $this->salary;
    }
}

$employee = new Employee('qwe', 'www', 23, 2000);
echo $employee->getAge();