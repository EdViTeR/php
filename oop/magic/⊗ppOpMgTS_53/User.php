<?php

/**
 *  №1
 */
class User {
	
	private $name;
	private $surname;
	private $patronymic;

	function __construct($name, $surname, $patronymic) {
		$this->name 		= $name;
		$this->surname 		= $surname;
		$this->patronymic 	= $patronymic;
	}

	function __toString() {
		return $this->name . ' ' . $this->surname . ' ' . $this->patronymic;
	}
}

echo $user = new User('Имя', 'Фамилия', 'Отчество');