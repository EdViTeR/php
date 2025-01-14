<?php
require_once 'Figure.php';

/**
 * 
 */
class Quadrate implements Figure {
	
	private $a;

	function __construct($a) {
		$this->a = $a;
	}

	public function getSquare() {
		return $this->a * 2;
	}

	public function getPerimeter() {
		return $this->a * 4;
	}
}