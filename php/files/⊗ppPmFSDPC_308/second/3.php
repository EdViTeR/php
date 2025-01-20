<?php

$a = array_diff(scandir('secondsecond'), ['.', '..']) ;
$dir = 'secondsecond';

foreach ($a as $key => $value) {
	$path = $dir. '/' . $value;
	if (is_file($path)) {
		file_put_contents($path, date('Ymd H-i-s'));
	}
}