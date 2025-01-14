<?php
require_once 'Quadrate.php';
require_once 'Rectangle.php';
/**
 * №1
 */
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

	// №2
	public function getTotalPerimeter() {
		$sum = 0;

		foreach ($this->figure as $figure) {
			$sum += $figure->getPerimeter();
		}

		return $sum;
	}
}

$figuresCollection = new FiguresCollection;

// Добавим парочку квадратов:
$figuresCollection->add(new Quadrate(2));
$figuresCollection->add(new Quadrate(3));
$figuresCollection->add(new Rectangle(2, 3));
$figuresCollection->add(new Rectangle(3, 4));
$figuresCollection->add(new Rectangle(4, 5));
var_dump($figuresCollection);
echo $figuresCollection->getTotalSquare();
echo $figuresCollection->getTotalPerimeter();