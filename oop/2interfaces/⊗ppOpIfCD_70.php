<?php

interface iCube {
	public function __construct($a);
	public function getSquare();
	public function getPerimeter();
}

class Cube implements iCube {
	
	private $a;

	public function __construct($a) {
		$this->a = $a;
	}

	public function getSquare() {
		return $this->a ** 3;		
	}

	public function getPerimeter() {
		return $this->a * 12;
	}
}

$cube = new Cube(4);
// echo $cube->getSquare();

interface iUser {
	public function __construct($name, $age);
	public function getName();
	public function getAge();
}

class User implements iUser {

	private $name;
	private $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	public function getName() {
		return $this->name;
	}

	public function getAge() {
		return $this->age;
	}
}

$user = new User('qwe', 23);
echo $user->getName() . ' ' . $user->getAge();