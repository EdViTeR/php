<?php

/**
 * 
 */
class Employee {

	public $name;
	public $salary;

    function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
}

$employee = new Employee(null, 123);
echo $employee?->name;