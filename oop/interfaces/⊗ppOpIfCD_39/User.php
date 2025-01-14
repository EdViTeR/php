<?php
require_once 'iUser.php';

/**
 * №4
 */
class User implements iUser {
	
	function __construct($name, $age) {
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

$user = new User('eric', 25);
echo $user->getName();
echo $user->getAge();