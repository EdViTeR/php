<?php
#№1
$str = '1s2 1x2 1z2 xCz x1z';
echo preg_replace('#1[^ex]2#', '!', $str) . '</br>';

#№2
echo preg_replace('#x[^2-7]z#', '!', $str) . '</br>';

#№3
echo preg_replace('#x[^A-Z]+z#', '!', $str) . '</br>';

#№4
echo preg_replace('#x[^a-z1-5]+z#', '!', $str) . '</br>';

echo  '<br></br><a href="regular.php">Назад</a>';
?>