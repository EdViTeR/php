<?php
require_once 'iCube.php';

/**
 * №2
 */
class Cube implements iCube {
	
	function __construct($a) {
		$this->a = $a;
	}

	public function getVolume() {
		return $this->a ** 3;
	}

	public function getSquare() {
		return ($this->a ** 2) * 6;
	}
}

$cube = new Cube(5);
echo $cube->getVolume();
echo $cube->getSquare();