<?php
#№1
$str = 'aaa xaa aaa xbb aaa';
echo preg_replace('#\bx[a-z]+#', '!', $str);
?>