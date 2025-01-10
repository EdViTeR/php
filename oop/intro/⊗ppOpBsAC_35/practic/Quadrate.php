<?php
require_once 'Figure.php';
/**
 * №4
 */
class Quadrate extends Figure {
	
	private $a;

	function __construct($a) {
		$this->a = $a;
	}

	public function getSquare() {
		return $this->a**2;
	}

	public function getPerimeter() {
		return $this->a*4;
	}
}

$quadrate = new Quadrate(2);
echo $quadrate->getSquare();
echo $quadrate->getPerimeter();
echo $quadrate->getRatio();
// №5
echo $quadrate->getSquarePerimeterSum();