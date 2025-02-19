<?php
$func = function() use (&$num1, &$num2)
{
	return $num1 + $num2;
};

$num1 = 2;
$num2 = 3;
echo $func();
?>