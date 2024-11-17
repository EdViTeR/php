<?php
#№1 ноль понимания
$str = '12:59:59 12:59:12 09:45:09';
echo preg_replace('#(?<h>\d{2})(?<m>\d{2})(?<s>\d{2})(\k<h>)(\k<m>)(\k<s>)#', '!', $str);

echo  '<br></br><a href="regular.php">Назад</a>';
?>