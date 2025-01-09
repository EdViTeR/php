<?php

/**
 * №1
 */
class User {
	
	private $name;
	private $surname;
	private $age;
	private $salary;

	// №2
	function __construct($name, $surname, $age, $salary) {
		$this->name 	= $name;
		$this->surname 	= $surname;
		$this->age 		= $age;
		$this->salary 	= $salary;
	}

	public function getName() {
		return $this->name;
	}

	public function getSurname() {
		return $this->surname;
	}

	public function getBirthday() {
		return $this->birthday;
	}

	public function getAge() {
		return $this->age;
	}

	public function getSalary() {
		return $this->salary;
	}
}