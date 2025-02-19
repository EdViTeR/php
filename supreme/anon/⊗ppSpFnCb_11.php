<?php
function func($arr, $calb) {
	$res = [];
	
	foreach ($arr as $elem) {
		$res[] = $calb($elem);
	}
	
	return $res;
}

function calb($n) {
	return $n**2;
}

$sqr = func([1,4,6,7], 'calb');
var_dump($sqr);
?>