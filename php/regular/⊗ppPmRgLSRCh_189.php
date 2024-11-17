<?php
#№1
$str = 'a.a aba aea';
echo preg_replace('#a\.a#', '!', $str) . '</br>';

#№2
$str = '2+3 223 2223';
echo preg_replace('#2\+3#', '!', $str) . '</br>';

#№3
$str = '23 2+3 2++3 2+++3 345 567';
echo preg_replace('#2(\+)+3#', '!', $str) . '</br>';

#№4
$str = '23 2+3 2++3 2+++3 445 677';
echo preg_replace('#2(\+)*3#', '!', $str) . '</br>';

#№5
$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
echo preg_replace('#\*q+\+#', '!', $str) . '</br>';

#№6
$str = '[abc] {abc} abc (abc) [abc]';
echo preg_replace('#\[...\]#', '!', $str) . '</br>';

echo  '<br></br><a href="regular.php">Назад</a>';
?>