<?php

interface Figure {

	public function getSquare();
	public function getPerimeter();
}


class FiguresCollection {

	private $figure = [];

	public function add(Figure $figure) {
		$this->figure[] = $figure;	
	}

	public function getTotalSquare() {
		$sum = 0;
		foreach ($this->figure as $figure) {
			$sum += $figure->getSquare();
		}
		return $sum;
	}

	public function getTotalPerimeter() {
		$sum = 0;
		foreach ($this->figure as $figure) {
			$sum += $figure->getPerimeter();
		}
		return $sum;
	}
}

class Quadrate implements Figure {

	private $a;

	function __construct($a) {
		$this->a = $a;
	}

	public function getSquare() {
		return $this->a * $this->a;
	}

	public function getPerimeter() {
		return $this->a * 4;
	}
}

class Circle implements Figure {
	
	const PI = 3.14;
	private $r;

	function __construct($r) {
		$this->r = $r;
	}

	public function getSquare() {
		return self::PI * ($this->r ** $this->r);
	}

	public function getPerimeter() {
		return self::PI * $this->r * 2;
	}
}

$figuresCollection = new FiguresCollection();
$figuresCollection->add(new Quadrate(2));
$figuresCollection->add(new Quadrate(4));
$figuresCollection->add(new Circle(3));
echo $figuresCollection->getTotalPerimeter();
echo $figuresCollection->getTotalSquare();