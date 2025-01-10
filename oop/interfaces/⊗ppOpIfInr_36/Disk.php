<?php
require_once 'Figure.php';

/**
 * №1
 */
class Disk implements Figure {
	
	const PI = 3.14;
	private $radius;

	function __construct($radius) {
		$this->radius = $radius;
	}

	public function getSquare() {
		return Disk::PI * $this->radius**2;
	}

	public function getPerimeter() {
		return 2 * Disk::PI * $this->radius;
	}
}

$disk = new Disk(4);
echo $disk->getSquare();
echo $disk->getPerimeter();