<?php
$num1 = 2;
$num2 = 3;

$func = function() use (&$num1, &$num2) {
	$num1 = $num1 ** 2;
	$num2 = $num2 ** 2;
};

$func();
echo $num1;
echo $num2;
?>