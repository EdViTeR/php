<?php

interface iFigure {
	public function getSquare();
	public function getPerimeter();
}

interface iTetragon {
	public function getA();
	public function getB();
	public function getC();
	public function getD();
}

interface iCircle {
	public function getRadius();
	public function getDiameter();
}

class Tetragon implements iFigure, iTetragon {
	private $a;
	private $b;

	function __construct($a, $b) {
		$this->a = $a;
		$this->b = $b;
	}

	function getA() {
		return $this->a;
	}

	function getB() {
		return $this->b;
	}

	function getC() {
		return $this->a;
	}

	function getD() {
		return $this->b;
	}

	public function getSquare() {
		return $this->a * $this->b;
	}

	public function getPerimeter() {
		return $this->a * $this->b * 2;
	}
}

$tetragon = new Tetragon(2,4);
echo $tetragon->getSquare();

class Disk implements iFigure, iCircle {

	private $r;
	const PI = 3.14;

	function __construct($r) {
		$this->r = $r;
	}

	public function getRadius() {
		return $this->r;
	}

	public function getDiameter() {
		return $this->r * 2;
	}

	public function getSquare() {
		return self::PI * $this->r ** 2;
	}

	public function getPerimeter() {
		return self::PI * $this->r * 2;
	}
}

$disk = new Disk(4);
echo $disk->getRadius();
echo $disk->getSquare();
echo $disk->getPerimeter();