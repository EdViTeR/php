<?php

/**
 * №1
 */
class Employee {
	
	public $name;
	public $age;
	public $salary;
}
#№2
$employee1 = new Employee();
$employee1->name = 'john';
$employee1->age = 25;
$employee1->salary = 1000;

#№3
$employee2 = new Employee();
$employee2->name = 'eric';
$employee2->age = 26;
$employee2->salary = 2000;

#№4
echo $employee1->salary + $employee2->salary . '</br>';
#№5
echo $employee1->age + $employee2->age;

echo '<br></br><a href="intro.php">Назад</a>';
?>