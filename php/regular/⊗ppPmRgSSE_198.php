<?php
#№1
$str = 'x[]z x{}z x.z x()z';
echo preg_replace('#x[\[\]\{\}\(\)]*z#', '!', $str) . '</br>';

#№2
$str = '[abc] {abc} abc (abc) [abc]';
echo preg_replace('#[\[\{\(]\w*[\]\}\)]#', '!', $str);
?>