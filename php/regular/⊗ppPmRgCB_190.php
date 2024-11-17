<?php
#№1
$str = 'aa aba abba abbba abbbba abbbbba';
echo preg_replace('#ab{2,4}a#', '!', $str) . '</br>';

#№2
$str = 'aa aba abba abbba abbbba abbbbba';
echo preg_replace('#ab{1,3}a#', '!', $str) . '</br>';

#№3
$str = 'aa aba abba abbba abbbba abbbbba';
echo preg_replace('#ab{4,}a#', '!', $str) . '</br>';

echo  '<br></br><a href="regular.php">Назад</a>';
?>