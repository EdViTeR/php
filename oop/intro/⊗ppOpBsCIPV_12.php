<?php

/**
 * №1
 */
class Student {
	
	private $name;
	private $course;

	function __construct($name) {
		$this->name = $name;
		$this->course = 1;
	}

	public function getName() {
		return $this->name;
	}

	public function getCourse() {
		return $this->course;
	}

	#№2
	public function transferToNextCourse() {
		if ($this->checkTransferToNextCourse($this->course)) {
			return $this->course++;
		}
	}

	private function checkTransferToNextCourse($course) {
		if ($this->course < 5) {
			return true;
		} else {
			return false;
		}
	}
}

$student = new Student('eric');
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();

echo '<br></br><a href="intro.php">Назад</a>';
?>