<?php

//
class Employeer {

	public $name;
	public $salary;

    function __construct($name, $salary) {
    	$this->name = $name;
    	$this->salary = $salary;
    }
}

class Student {

	public $name;
	public $scholarship;

    function __construct($name, $scholarship) {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }
}

$arr = [
	$e1 = new Employeer('qwe', 1111),
	$s1 = new Student('qqq', 1212),
	$e2 = new Employeer('www', 2222),
	$e3 = new Employeer('eee', 3333),
	$s2 = new Student('rrr', 2323),
	$s3 = new Student('ttt', 2424),
];

foreach ($arr as $key => $value) {
	if ($value instanceof Employeer) {
		echo "Работник" . $value->name . '<p>';
	}  else {
		echo "Стипендия" . $value->scholarship . '<p>';
	}
}