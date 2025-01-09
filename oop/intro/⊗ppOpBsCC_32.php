<?php

/**
 * №1
 */
class Circle {
	
	const PI = 3.14;
	private $radius;

	function __construct($radius) {
		$this->radius= $radius;
	}

	public function getSquare(){
		return self::PI * $this->radius**2;
	}

	public function getCircuit(){
		return 2 * self::PI * $this->radius;
	}
}

// №2
$circle = new Circle(10);
echo $circle->getSquare() . '<p>';
echo $circle->getCircuit();