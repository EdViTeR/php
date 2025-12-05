<?php
class User {
	private $name;
	private $surn;
	
	public function setName($name) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	
	public function setSurn($surn) {
		$this->surn = $surn;
	}
	public function getSurn() {
		return $this->surn;
	}
}

//
class Employee extends User {

	public function getFull() {
		return $this->name . ' ' . $this->surn;
	}

}

$employee = new Employee();
$employee->setName('qwe');
echo $employee->getName();