<?php
require_once 'iUser.php';

/**
 * 
 */
class User implements iUser {
	
	private $name;
	private $age;

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getAge() {
		return $this->age;
	}

	public function setAge($age) {
		$this->age = $age;
	}
}

$user = new User;
$user->setName('Eric');
$user->setAge('25');
echo $user->getName();
echo $user->getage();