<?php
require_once 'iFigure.php';

/**
 * 
 */
class Quadrate implements iFigure {

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