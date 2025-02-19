<?php
$num = 5;

$func = function() use ($num) {
	return $num ** 2;
};

echo $func();
?>