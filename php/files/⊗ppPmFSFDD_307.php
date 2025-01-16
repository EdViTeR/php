<?php

$a = $_SERVER['DOCUMENT_ROOT'] . '/index.php';
$b = $_SERVER['DOCUMENT_ROOT'] . '/task';

// №1
var_dump(is_file($a));

// №2
var_dump(is_dir($b));