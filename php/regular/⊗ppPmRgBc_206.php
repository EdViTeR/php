<?php
#№1
$str = 'a\\b c\\d e\\f';
echo preg_replace('#[a-z]\\\\[a-z]#', '!', $str) . '</br>';

#№2
$str = 'a\\b c\\\\d e\\\\\\f';
echo preg_replace('#[a-z]\\\\+[a-z]#', '!', $str);
?>