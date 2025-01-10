<?php
require_once 'User.php';

/**
 * №1
 */
class Student extends User {
	
	private $scholarship;

	public function getScholarship() {
		return $this->scholarship;
	}

	public function setScholarship($scholarship) {
		$this->scholarship = $scholarship;
	}

	public function increaseRevenue($value) {
		$this->scholarship = $this->scholarship + $value;
	}
	
	//№3
	public function decreaseRevenue($value) {
		$this->scholarship = $this->scholarship - $value;
	}
}

$student = new Student;
$student->setName('mark');
$student->setScholarship(1000);
echo $student->getName();
echo $student->getScholarship();
echo $student->increaseRevenue(500);
echo $student->getScholarship();
echo $student->decreaseRevenue(300);
echo $student->getScholarship();