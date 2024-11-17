<?php
#№1 http://www.php.su/functions/?preg-match-all ссылка в уроке не рабочая
$str = '2023-10-29 2024-11-30 2025-12-31';
$reg = '#(\d{4})-(\d{2})-(\d{2})#';
preg_match_all($reg, $str, $res, PREG_SET_ORDER);
var_dump($res); die;

//взял инфу отсюда https://www.php.net/manual/en/pcre.constants.php#constant.preg-pattern-order
?>