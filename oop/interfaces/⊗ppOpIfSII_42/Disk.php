<?php 
require_once 'iFigure.php';
require_once 'iCircle.php';

/**
 * №3
 */
class Disk implements iFigure, iCircle {
	
	CONST PI = 3.14;
	private $radius;

	function __construct($radius) {
		$this->radius = $radius;
	}

	public function getRadius() {
		return $this->radius;
	}

	public function getDiameter() {
		return $this->radius * 2;
	}

	public function getSquare() {
		return self::PI * $this->radius ** 2;
	}

	public function getPerimeter() {
		return 2 * self::PI * $this->radius;
	}
}

$disc = new Disk(8);
echo $disc->getPerimeter(). '<p>';
echo $disc->getSquare();