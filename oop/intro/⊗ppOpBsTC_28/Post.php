<?php

/**
 * №1
 */
class Post {
	
	public $name;
	public $salary;

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

// №2
$prog = new Post('Программист', 10000);
$manager = new Post('Менеджер водитель', 5000);