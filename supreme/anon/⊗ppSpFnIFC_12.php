<?php
// $arr = [1, 2, 3, 4, 5];

// $res = array_map('sqrt', $arr);

// function func($num) {
// 		return $num ** 2;
// 	}
// $res = array_map('func', $arr);

// $func = function ($num) {
// 	return $num ** 2;
// };

// $res = array_map($func, $arr);

// $res = array_map(function ($num) {
// 	return $num ** 2;
// }, $arr);


// $res = array_map(fn ($num) => $num ** 2, $arr);

// $pow = 3;

// $res = array_map(function ($num) use ($pow) {
// 	return $num ** $pow;
// }, $arr);

// $res = array_map(fn ($num) => $num ** $pow, $arr);

// var_dump($res);

// №1
$words = ["яблоко", "машина", "река", "солнце", "книга", "друзья", "город", "птица", "лес", "компьютер"];

function mb_ucfirst_name($name, $encoding='UTF-8') {
    $name = mb_ereg_replace('^[\ ]+', '', $name);
    $name = mb_strtoupper(mb_substr($name, 0, 1, $encoding), $encoding).
    mb_substr($name, 1, mb_strlen($name), $encoding);
    return $name;
}

$res = array_map('mb_ucfirst_name', $words);
var_dump($res);
echo "<br>";

// №2
function mb_strrev($string)
{
    $strrev = "";
    for($i = mb_strlen($string, "UTF-8"); $i >= 0; $i--) {
        $strrev .= mb_substr($string, $i, 1, "UTF-8");
    }
    return $strrev;
}
$res = array_map('mb_strrev', $words);
var_dump($res);