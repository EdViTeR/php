<?php

/**
 * №1
 */
class Employee {
	
	public $name;
	public $salary;

	function __construct($name, $salary) {
		$this->name 	= $name;
		$this->salary 	= $salary;
	}
}

/**
 * №2
 */
class Student {
	public $name;
	public $scholarship;

	function __construct($name, $scholarship) {
		$this->name 		= $name;
		$this->scholarship 	= $scholarship;
	}
}

// №3
$arr = [
	$employee1 = new Employee('mark', 1000),
	$student1 = new Student('eric', 500),
	$student2 = new Student('mark', 2000),
	$employee2 = new Employee('max', 3000),
	$employee3 = new Employee('john', 140),
	$student3 = new Student('jane', 5000),
];

// №4
foreach ($arr as $key => $value) {
	if ($value instanceof Employee) {
		echo $value->name . ' Работник<p>';
	}
	// №5
	if ($value instanceof Student) {
		echo $value->name . ' Студент<p>';
	}
}

// №6
$salary = 0;
$scholarship = 0;
foreach ($arr as $key => $value) {
	if ($value instanceof Employee) {
		$salary += $value->salary;
	}
}

$scholarship = 0;
foreach ($arr as $key => $value) {
	if ($value instanceof Student) {
		$scholarship += $value->scholarship;
	}
}

echo 'Зарплата ' . $salary;
echo '<p>Стипендия ' . $scholarship;