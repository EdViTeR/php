<?php
require_once 'User.php';

/**
 * 
 */
class Student extends User
{
	private $course;

	function __construct($name, $age, $course) {
		parent::__construct($name, $age);
		$this->course = $course;
	}
	
	public function getCourse() {
		return $this->course;
	}
}

$student = new Student('john', 19, 2); // теперь это работает

echo $student->getName();   // выведет 'john'
echo $student->getAge();    // выведет 19
echo $student->getCourse(); // выведет 2