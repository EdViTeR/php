<?php
#№1
$str = 'ab abab abab abababab abea';
echo preg_replace('#(ab)+#', '!', $str);
?>