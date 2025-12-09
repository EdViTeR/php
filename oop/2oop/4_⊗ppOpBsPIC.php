<?php

class Employee {
	public $name;
	public $salary;
	public $age;

	public function show($str) {
		return $str . '!!!';
	}

	public function getName() {
		return $this->name;
	}

	public function getSalary() {
		return $this->salary;
	}

}

$a = new Employee();
$a->name = 'qwe';
$a->salary = '123';
echo $a->getName();
echo $a->getSalary();