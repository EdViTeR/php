<?php

class User {

	private $name = 'qwe';
	private $age = 23;

	public function __get($property) {
		return $this->$property;
	}
}

$user = new User;
echo $user->name;
echo $user->age;