<?php
require_once 'User.php';

/**
 * №1
 */
class Student extends User {
	
	private $course;

	public function addOneYear() {
		$this->age++;
	}

	public function getCourse() {
		return $this->course;
	}

	public function setCourse($course) {
		$this->course = $course;
	}
}

$student = new Student;
$student->setName('John');
$student->setAge(24);
echo $student->getName();
echo $student->getAge();
$student->setCourse(2);
$student->addOneYear();
echo $student->getAge();
