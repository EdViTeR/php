<?php
require_once 'User.php';

/**
 * №6
 */
class Employee extends User {
	
	private $salary;
	private $birthday;

	// №3 №5
	function __construct($name, $surname, $birthday, $salary) {
		parent::__construct($name, $surname, $this->calculateAge($birthday), $salary);
	}

	// №4
	private function calculateAge($birthday) {
		return substr($this->age = date('Ymd')-date('Ymd', strtotime($birthday)), 0, -4);
	}
}

$user = new Employee('qwe', 'wer', '1990-12-01', 2000);
echo $user->getAge();
echo $user->getSalary();
