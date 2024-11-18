<?php

/**
 * №1
 */
class City {
	
	function __construct($name, $population) {
		$this->name = $name;
		$this->population = $population;
	}
}

#№2
$cities = [
	new City('Moskow', 4),
	new City('Minsk', 3),
	new City('Chita', 1),
	new City('Brest', 2),
	new City('Rostov', 1),
];

#№3
foreach ($cities as $key => $value) {
	echo $value->name . ' ' . $value->population . '</br>';
}

echo '<br></br><a href="intro.php">Назад</a>';
?>