<?php

class User {

	private $name;
	private $age;

	public function __set($property, $value) {

		switch ($property) {
			case 'name':
				if ($value != '') {
					$this->$property = $value;
				}
				break;
			case 'age':
				if ($value >= 0 && $value <= 70) {
					$this->$property = $value;
				}
				break;
			
			default:
				echo 'property not exists';
				break;
		}
	}

	public function __get($property) {
		return $this->$property;
	}
}

$user = new User;
$user->name = 'qwe';
$user->age = 24;
echo $user->name . ' ' . $user->age;