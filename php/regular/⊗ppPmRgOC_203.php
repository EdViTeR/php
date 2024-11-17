<?php
#№1
$str = 'aeeea aeea aea axa axxa axxxa';
echo preg_replace('#a(e+|x+)a#', '!', $str) . '</br>';

#№2
echo preg_replace('#a(e{2}|x+)a#', '!', $str);
?>