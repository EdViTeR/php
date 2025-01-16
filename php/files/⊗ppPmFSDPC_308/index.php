<?php

$a = array_diff(scandir(__DIR__), ['.', '..']) ;

foreach ($a as $key => $value) {
	if (is_dir($value)) {
		$b = array_diff(scandir($value), ['.', '..']) ;
		foreach ($b as $key => $valuee) {
			echo $valuee . 'папка<p>';
		}
	}

	// if (condition) {
	// 	// code...
	// }
}