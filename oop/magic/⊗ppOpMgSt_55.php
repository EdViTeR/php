<?php

class User {
	
	private $name;
	private $age;

	function __set($property, $value) {

		switch ($property) {
			case 'name':
				if ($value != '') {
					$this->$property = $value;
				}
				break;
			case 'age':
				if ($value >= 0 and $value <= 70) {
					$this->$property = $value;
				}
				break;
			
			default:
				// такого значения нет
				break;
		}
	}

	function __get($property) {
		return $this->$property;
	}
}

$user = new User;
$user->name = 'eric';
$user->age = 25;
echo $user->name;
echo $user->age;