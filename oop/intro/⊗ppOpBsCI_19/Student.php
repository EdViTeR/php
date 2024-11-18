<?php
require_once 'User.php';

/**
 * №2
 */
class Student extends User
{
	private $course;

	public function getCourse() {
		return $this->course;
	}

	public function setCourse($course) {
		$this->course = $course;
	}
}

$student = new Student;

$student->setCourse(3);
$student->setName('john');
$student->setAge(25);
echo $student->getCourse();
echo $student->getName();
echo $student->getAge();

?>