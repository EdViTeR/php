<?php

interface Figure3d {
	public function getVolume($a);
	public function getSurfaceSquare($a);
}

interface iFigure {
	public function getSquare($a);
}

class Cube implements Figure3d {

	public function getVolume($a) {
		return 20*$a;
	}

	public function getSurfaceSquare($a) {
		return 3*$a;
	}

}

class Quadrate implements iFigure {

	public function getSquare($a) {
		return 2*$a;
	}
}

class Rectangle implements iFigure {

	public function getSquare($a) {
		return 2*$a;
	}
}

$figures = [
	new Cube(),
	new Quadrate(),
	new Cube(),
	new Rectangle(),
	new Quadrate(),
	new Rectangle(),
	new Cube(),
];

foreach ($figures as $figure) {
	if ($figure instanceof iFigure) {
		echo "Площадь: " . $figure->getSquare(2) . "<p>";
	} elseif ($figure instanceof Figure3d) {
		echo "Объем: " . $figure->getVolume(2) . "<p>";
	}
}