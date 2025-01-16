<?php

$arr = ['1.txt', '2.txt', '3.txt'];
$string = '';
foreach ($arr as $key => $value) {
	$string .= file_get_contents($value);
}
file_put_contents('new.txt', $string);