<?php

$_GET['class'] = 'йцу';

class Test1 { }

var_dump(class_exists('Test1'));
var_dump(class_exists('Test2'));

if (class_exists($_GET['class'])) {
	echo "Класс " . $_GET['class'] . ' существует';
} else {
	echo "Класса " . $_GET['class'] . ' не существует';
}