<?php

abstract class Figure {

	abstract public function getSquare($a);
	abstract public function getPerimeter($a);
}

class Circle extends Figure {
	public function getSquare($a) {
		return $a*2*3.14;
	}

	function getPerimeter($a) {
		return 2*3.14*$a;
	}
}

class Rectangle extends Figure {
	public function getSquare($a) {
		return $a**2;
	}

	public function getPerimeter($a) {
		return $a*2;
	}
}

class Triangle extends Figure {
	public function getSquare($a) {
		return $a*2;
	}

	public function getPerimeter($a) {
		return $a*3;
	}
}

// $a = new Rectangle();
// echo $a->getSquare(4);

// $a = new Triangle();
// echo $a->getPerimeter(5);

abstract class User {

	private $name;

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	abstract public function increaseRevenue($value);

}

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
}

$student = new Student();
$student->setName('qwe');
echo $student->getName();
$student->setScholarship(2000);
$student->increaseRevenue(1000);
echo $student->getScholarship();