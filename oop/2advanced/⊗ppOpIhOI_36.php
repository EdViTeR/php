<?php

//
class User {

	public $name;
	public $surname;

	function __construct($name, $surname) {
		$this->name = $name;
		$this->surname = $surname;
	}

}

//
class Employee extends User {

	public $salary;

    function __construct($salary) {
        $this->salary = $salary;
    }
}

//
class City {

	public $name;
	public $population;

    function __construct($name, $population) {
		$this->name = $name;
		$this->population = $population;
    }
}

$arr = [
	$user1 = new User('111', 'www'),
	$city1 = new City('11', 'www'),
	$city2 = new City('22', 'www'),
	$user2 = new User('222', 'www'),
	$employee1 = new Employee('22', 'www'),
	$user3 = new User('qwe', 'www'),
	$employee2 = new Employee('qwe', 'www'),
	$employee3 = new Employee('qwe', 'www'),
	$city3 = new City('qwe', 'www'),
];
foreach ($arr as $key => $value) {
	if ($value instanceof User === true) {
		echo $value->name . '<br>';
	}
}