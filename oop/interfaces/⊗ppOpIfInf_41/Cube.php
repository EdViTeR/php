<?php
require_once 'Figure3d.php';

/**
 * №2
 */
class Cube implements Figure3d {
	
	private $a;

	function __construct($a) {
		$this->a = $a;
	}

	public function getVolume() {
		return $this->a ** 3;
	}

	public function getSurfaceSquare() {
		return ($this->a ** 2) * 6;
	}
}

$cube = new Cube(4);
var_dump($cube instanceof Figure3d);