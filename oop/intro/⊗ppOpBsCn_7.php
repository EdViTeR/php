<?php

/**
 * №1
 */
class Employee {
	
	function __construct($name, $age, $salary) {
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}
}

#№2
$employee1 = new Employee('eric', 25, 1000);
#№3
$employee2 = new Employee('kyle', 30, 2000);
#№4
echo $employee1->salary + $employee2->salary;
echo '<br></br><a href="intro.php">Назад</a>';
?>