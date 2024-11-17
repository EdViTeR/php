<?php
#№1
$str = 'aeeea aeea aea axa axxa axxxa';
echo preg_replace('~a(e+|x+)a~', '!', $str) . '</br>';
echo preg_replace('~a(e{2}|x+)a~', '!', $str);

echo  '<br></br><a href="regular.php">Назад</a>';
?>