<?php

/**
 * №1
 */
class User {
	public $name;
	public $age;

	public function isAgeCorrect($age) {
		return $checkAge = ($age >= 18 and $age <= 60) ? true : false;
	}

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
	#№3
	public function subAge($years) {
		$newAge = $this->age - $years;

		if ($this->isAgeCorrect($newAge)) {
			$this->age = $newAge;
		}
	}
}

$user = new User;
#№2
$user->setAge(30);
echo $user->age;
$user->setAge(10);
echo $user->age;
$user->addAge(10);
echo $user->age;
$user->subAge(10);
echo $user->age;

echo '<br></br><a href="intro.php">Назад</a>';
?>