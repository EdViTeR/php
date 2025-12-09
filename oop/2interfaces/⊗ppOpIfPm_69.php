<?php

interface iUser {
	public function setName($name); 
	public function getName(); 
	public function setAge($age); 
	public function getAge(); 
}

class User implements iUser {

	private $name;
	private $age;

	function setName($name) {
		$this->name = $name;
	} 

	public function getName() {
		return $this->name;
	}

	function setAge($age) {
		$this->age = $age;
	} 

	public function getAge() {
		return $this->age;
	}
}

$user = new User();
$user->setName('qwe');
$user->setAge(12);
echo $user->getName() . ' ' . $user->getAge();