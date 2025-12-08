<?php

interface Figure {
	public function getSquare();
	public function getPerimeter();
}

class Quadrate implements Figure {

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

class Disk implements Figure {
	private $r;

	function __construct($r) {
		$this->r = $r;
	}

	public function getSquare() {
		return $this->r**2*3.14;
	}

	public function getPerimeter() {
		return $this->r*2*3.14;
	}
}

$disk = new Disk(2);
echo $disk->getSquare();