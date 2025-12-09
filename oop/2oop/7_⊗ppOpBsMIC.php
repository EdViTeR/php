<?php

class Student {
	public $name;
	public $surn;

	public function getStr($str) {
		return ucfirst($str);
	}
}
$student = new Student();
echo $student->getStr('asd asd asd');
