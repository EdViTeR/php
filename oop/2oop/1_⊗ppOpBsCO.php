<?php

/**
 * 
 */
class Employee {

	public $name;
	public $age;
	public $salary;
}

$a = new Employee;
$b = new Employee;
$a->salary = 1000;
$a->age = 25;
$b->salary = 2000;
$b->age = 26;
echo $a->salary + $b->salary . '<p>';
echo $a->age + $b->age;