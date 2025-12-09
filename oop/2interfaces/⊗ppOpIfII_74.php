<?php

interface iProgrammer {
	public function __construct($name, $salary);
	public function getName();
	public function getSalary();
	public function getLangs();
	public function addLangs($lang);
}

class Employee {
	
	private $name;
	private $salary;

	function __construct($name, $salary) {
		$this->name = $name;
		$this->salary = $salary;
	}

	public function getName() {
		return $this->name;
	}

	public function getSalary() {
		return $this->salary;
	}
}

class Programmer extends Employee implements iProgrammer {

	private $lang = [];

	public function addLangs($lang) {
		$this->lang[] = $lang;
	}

	public function getLangs() {
		return $this->lang;
	}
}

$programmer = new Programmer('qwe', 2200);
$programmer->addLangs('php');
$programmer->addLangs('python');
echo $programmer->getName();