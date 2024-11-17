<?php
#№1
$str = '2025-12-31';
$reg = '#(\d{4})-(\d{2})-(\d{2})#';
preg_match($reg, $str, $res);
// var_dump($res);

#№2
$str = 'index.html';
$reg = '#([a-zA-Z]+)\.(html)$#';
preg_match($reg, $str, $res);
var_dump($res); die;