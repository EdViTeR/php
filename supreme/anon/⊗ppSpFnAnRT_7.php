<?php
// №1
$num1 = 4;
$num2 = 3;

$res = function() use ($num1, $num2): int {
	return pow($num1, $num2);
};
	
echo $res();

// №2
$age = 18;

$func = function($name ) use ($age): string {
	return 'name: ' . $name . ' age: ' . $age;
};
	
echo $func('alex');
?>