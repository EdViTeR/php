<?php

class Test {
	public $prop1 = 1;
	public $prop3 = 3;
}

echo property_exists('Test', 'prop2');

$arr = ['prop1','prop2','prop3','prop4'];

foreach ($arr as $key => $value) {
	if (property_exists('Test', $value)) {
		echo (new Test)->$value . '<p>';
	} else {
		echo 'Такого свойства нет<p>';
	}
}