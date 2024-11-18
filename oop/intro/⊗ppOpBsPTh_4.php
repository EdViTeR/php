<?php

/**
 * №1
*/
/**
class Employee {
	public $name;
	public $age;
	public $salary;

	#№2
	function getName() {
		return $this->name;
	}

	#№3
	function getAge() {
		return $this->age;
	}

	#№4
	function getSalary() {
		return $this->salary;
	}

	#№5
	function checkAge() {
		return ($this->age >= 18) ? true : false;
	}
}
$emp1 = new Employee();
$emp1->name = 'john';
$emp1->age = 25;
$emp1->salary = 1000;
echo $emp1->getName() . '|';
echo $emp1->getAge() . '|';
echo $emp1->getSalary() . '</br>';

$emp2 = new Employee();
$emp2->name = 'eric';
$emp2->age = 26;
$emp2->salary = 2000;
echo $emp2->getName() . '|';
echo $emp2->getAge() . '|';
echo $emp2->getSalary() . '</br>';

#№5
echo $emp1->checkAge() . '|';
#№6
echo $emp1->getSalary() + $emp2->getSalary() . '</br>';
*/
//____________________________________________________
/**
 * №7
*/
/**
class User {
	public $name;
	public $age;
	#№8, №10
	public function setAge($age) {
		if ($age >= 18) {
			$this->age = $age;
		}
	}
}

#№9
$user1 = new User;
$user1->name = 'john';
$user1->age = 25;
$user1->setAge(26);
echo $user1->age . '</br>';
*/
//____________________________________________________
/**
 * №11
*/
/**
class Employee {
	public $name;
	public $salary;
	# №11
	public function doubleSalary($salary) {
		$this->salary = $salary * 2;
	}
}

$employee = new Employee;
$employee->doubleSalary($employee->salary = 2000);
echo $employee->salary;
*/
/**
 * №12
 */
class Rectangle {
	public $width;
	public $height;
 	#№13
	public function getSquare(){
		return $square = $this->width * $this->height;
	}
 	#№14
	public function getPerimeter(){
		return $square = $this->width * 2 + $this->height * 2;
	}
}

$rectangle = new Rectangle;
$rectangle->width = 100;
$rectangle->height = 200;
echo $rectangle->getSquare() . '</br>';
echo $rectangle->getPerimeter();

echo '<br></br><a href="intro.php">Назад</a>';
?>