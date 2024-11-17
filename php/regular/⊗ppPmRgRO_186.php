<?php
#№1
$str = 'aa aba abba abbba abca abea';
echo preg_replace('#ab+a#', '!', $str) . '</br>';

#№2
$str = 'aa aba abba abbba abca abea';
echo preg_replace('#ab*a#', '!', $str) . '</br>';

#№3
$str = 'aa aba abba abbba abca abea';
echo preg_replace('#ab?a#', '!', $str) . '</br>';

#№4
$str = 'aa aba abba abbba abca abea';
echo preg_replace('#ab*a#', '!', $str);

echo  '<br></br><a href="regular.php">Назад</a>';
?>