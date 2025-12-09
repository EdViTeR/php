<?php

class Employee {
	public $name;
	public $salary;
	public $age;

	public function show($str) {
		return $str . '!!!';
	}

}

$a = new Employee();
echo $a->show('asdasd');