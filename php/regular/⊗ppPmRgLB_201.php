<?php
#№1
$str = 'abc def xyz';
echo preg_replace('#^abc#', '!', $str) . '</br>';

#№2
echo preg_replace('#xyz$#', '!', $str);

echo  '<br></br><a href="regular.php">Назад</a>';
?>