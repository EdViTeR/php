<?php
require_once 'iFigure.php';
require_once 'iTetragon.php';


class Quadrate implements iFigure, iTetragon {

	private $a;

	public function __construct($a) {
		$this->a = $a;
	}

	public function getA() {
		return $this->a;
	}

	public function getB() {
		return $this->a;
	}

	public function getC() {
		return $this->a;
	}

	public function getD() {
		return $this->a;
	}

	public function getSquare() {
		return $this->a * $this->a;
	}

	public function getPerimeter() {
		return 4 * $this->a;
	}
}
$quadrate = new Quadrate(5);
echo $quadrate->getPerimeter();
?>