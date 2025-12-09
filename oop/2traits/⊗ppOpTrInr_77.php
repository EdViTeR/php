<?php

trait Helper {

	public function getName() {
		return $this->name;
	}

	public function getAge() {
		return $this->age;
	}

	public function getPopulation() {
		return $this->population;
	}
}

class City {
	
	use Helper;

	private $name;
	private $age;
	private $population;

	function __construct($name, $age, $population) {
		$this->name = $name;
		$this->age = $age;
		$this->population = $population;
	}
}

$city = new City('qwe', 23, 2000);
echo $city->getName();