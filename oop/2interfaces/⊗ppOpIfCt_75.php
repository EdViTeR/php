<?php

interface iSphere {
	const PI = 3.14;
	function __construct($radius);
	function getVolume();
	function getSquare();
}

class Sphere implements iSphere {

	private $radius;

	public function __construct($radius) {
		$this->radius = $radius;
	}

	public function getSquare() {
		return self::PI * $this->radius ** 2;
	}

	public function getVolume() {
		return 4 / 3 * self::PI * $this->radius ** 3;
	}
}

$sphere = new Sphere(4);
echo $sphere->getSquare() . '<p>';
echo $sphere->getVolume();