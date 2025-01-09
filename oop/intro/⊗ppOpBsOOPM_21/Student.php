<?php
require_once 'User.php';

/**
 * №1
 */
class Student extends User {
	
	private $course;

	public function getCourse() {
		return $this->course();
	}

	public function setCourse($course)	{
		$this->course = $course;
	}

	public function setAge($age) {
		if ($age <= 25) {
			parent::setAge($age);
		}
	}

	// №2
	public function setName($name) {
		if (strlen($name) < 10) {
			parent::setName($name);
		}
	}
}

$student = new Student;
$student->setAge(24);
echo $student->getAge();
$student->setAge(232);
echo $student->getAge();
$student->setName('qw');
$student->setName('qwqweqweq');
echo $student->getName();