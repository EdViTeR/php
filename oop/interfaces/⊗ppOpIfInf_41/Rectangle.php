<?php
require_once 'iFigure.php';

/**
 * 
 */
class Rectangle implements iFigure {
	
	private $a;
	private $b;

	function __construct($a, $b) {
		$this->a = $a;
		$this->b = $b;
	}

	public function getSquare() {
		return $this->a * $this->b;
	}

	public function getPerimeter() {
		return ($this->a + $this->b) * 2;
	}
}

$rectangle = new Rectangle(2, 4);
echo $rectangle->getSquare();
echo $rectangle->getPerimeter();