<?php

/**
 * №7
 */
class User {
	
	public $name;
	public $surname;

	function __construct($name, $surname) {
		$this->name 	= $name;
		$this->surname 	= $surname;
	}
}

/**
 * №8
 */
class Employee extends User
{
	
	public $salary;

	function __construct($salary) {
		$this->salary = $salary;
	}
}

/**
 * №9
 */
class City {

	public $name;
	public $population;

	function __construct($name, $population) {
		$this->name = $name;
		$this->population = $population;
	}
}

// №10
$arr = [
	$employee1 = new Employee('mark', 'qwe', 1000),
	$user1 = new User('eric', 'asd'),
	$user2 = new User('mark', 'gfsdfd'),
	$city1 = new City('moscow', 2000),
	$employee2 = new Employee('max', 'wer', 3000),
	$city2 = new City('london', 140),
	$employee3 = new Employee('john', 'ert', 140),
	$city3 = new City('brest', 140),
	$user3 = new User('jane', 'hhh'),
];

// №11
// foreach ($arr as $key => $value) {
// 	if ($value instanceof Employee) {
// 		echo $value->name . ' Имя<p>';
// 	}
// }

// №12
// foreach ($arr as $key => $value) {
// 	if (!($value instanceof User)) {
// 		echo $value->name . ' Имя<p>';
// 	}
// }

// №13
// foreach ($arr as $key => $value) {
// 	if ($value instanceof User) {
// 		echo $value->name . ' Имя<p>';
// 	}
// }