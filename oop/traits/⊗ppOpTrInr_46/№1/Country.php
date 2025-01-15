<?php
require_once 'Helper.php';

/**
 * 
 */
class Country {

	use Helper;
	
	function __construct($name, $age, $population) {
		$this->name 		= $name;
		$this->age 			= $age;
		$this->population 	= $population;
	}

	public function getPopulation() {
		return $this->population;
	}
}

$country = new Country('Russia', 34, 145);
echo $country->getName();
echo $country->getAge();
echo $country->getPopulation();