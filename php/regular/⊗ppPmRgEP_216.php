<?php
#№1
$str = 'aaa bbb ccc xyz';
echo preg_replace('#([a-z])\1{2}#', '!', $str) . '</br>';

#№2
$str = 'a aa aaa abab bbbb';
echo preg_replace('#([a-z])\1+#', '!', $str) . '</br>';

#№3
$str = 'aaa aaa bbb bbb ccc ddd';
echo preg_replace('#(\b[a-z]+\b\s)\1#', '!', $str);

echo  '<br></br><a href="regular.php">Назад</a>';
?>