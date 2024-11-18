<?php

/**
 * №1
*/
/**
class User {
	public $name;
	public $age;

	public function setAge($age) {
		if ($this->isAgeCorrect($age)) {
			$this->age = $age;
		}
	}

	public function addAge($years) {
		$newAge = $this->age + $years;

		if ($this->isAgeCorrect($newAge)) {
			$this->age = $newAge;
		}
	}

	public function subAge($years) {
		$newAge = $this->age - $years;

		if ($this->isAgeCorrect($newAge)) {
			$this->age = $newAge;
		}
	}

	private function isAgeCorrect($age) {
		return $checkAge = ($age >= 18 and $age <= 60) ? true : false;
	}
}

$user = new User;
$user->setAge(30);
echo $user->age;
$user->setAge(10);
echo $user->age;
$user->addAge(10);
echo $user->age;
$user->subAge(10);
echo $user->age;
#№2
// $user->isAgeCorrect(10);
//_______________________________________
*/

/**
 * #№3
 */
class Student {
	public $name;
	public $course;

	#№4
	public function transferToNextCourse() {
		if ($this->isCourseCorrect($this->course)) {
			$this->course++;
		}
	}
	#№5, №6
	private function isCourseCorrect($course) {
		if ($this->course < 5) {
			return true;
		} else {
			return false;
		}
	}
}

$student = new Student;
$student->course = 2;
$student->transferToNextCourse();
echo $student->course;

echo '<br></br><a href="intro.php">Назад</a>';
?>