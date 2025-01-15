<?php

/**
 * №1
 */
class User {

	private $name;
	private $age;
	
	function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	function __get($prop) {
		return $this->$prop;
	}
}

$user = new User('eric', 12);
echo $user->name;
echo $user->age;