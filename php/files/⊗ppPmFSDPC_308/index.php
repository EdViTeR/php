<?php

$a = array_diff(scandir(__DIR__), ['.', '..']) ;

// №1
foreach ($a as $key => $value) {
	if (is_dir($value)) {
		var_dump(array_diff(scandir($value), ['.', '..']));
	}

	// №2
	if (is_file($value)) {
		var_dump($value);
	}
}