<?php
require_once 'iSphere.php';

/**
 * №1
 */
class Sphere implements iSphere {
	
	private $radius;

	function __construct($radius) {
		$this->radius = $radius;
	}

	public function getVolume() {
		return 4 / 3 * (self::PI ** 3);
	}

	public function getSquare() {
		return self::PI * $this->radius ** 2;
	}
}

$sphere = new Sphere(4);
echo $sphere->getVolume() . '<p>';
echo $sphere->getSquare();