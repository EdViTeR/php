<?php
// №1
$a = array_diff(scandir('dir'), ['.', '..']);
var_dump($a);
foreach ($a as $key => $value) {
	// №2
	echo $b = file_get_contents('dir/' . $value);
	// №3
	$b .= '!';
	file_put_contents('dir/' . $value, $b);
}