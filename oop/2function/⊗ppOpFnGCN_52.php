<?php

class Arr {}

$arr = new Arr();
// echo get_class($arr);
////////////////////////////////////////////////////////
class Test1 {
	public $name = 'aaaaa';
}

class Test2 {
	public $name = 'sssss';
}

$arr = [
	new Test1,
	new Test2,
	new Test2,
	new Test1,
];

foreach ($arr as $key => $value) {
	echo $value->name . ' ' . get_class($value) . '<p>';
}
?>