<?php

/**
 * №1
 */
class City
{
	public $name;
	public $foundation;
	public $population;

	function __construct($name, $foundation, $population) {
		$this->name = $name;
		$this->foundation = $foundation;
		$this->population = $population;
	}
}

$cities = new City('Moscow', 1147, 20);
$props = ['name', 'foundation', 'population'];
#№2
foreach ($props as $key => $value) {
	echo $cities->$value;
}
//_______________________________________________
#№3
class User {
	public $surname;
	public $name;
	public $patronymic;
	
	public function __construct($surname, $name, $patronymic)
	{
		$this->surname = $surname;
		$this->name = $name;
		$this->patronymic = $patronymic;
	}
}
$user = new User('Иванов', 'Иван', 'Иванович');
$props = ['surname', 'name', 'patronymic'];
echo '</br>' . $user->{$props[0]} . ' | ' . $user->{$props[1]} . ' | ' . $user->{$props[2]};

echo '<br></br><a href="intro.php">Назад</a>';
?>