<?php
#№1
$str = '12 34 56 78';
echo preg_replace('#([0-9])([0-9])#', '$2$1', $str) . '</br>';

#№2
$str = '31.12.2025';
echo preg_replace('#(\d{2})\.(\d{2}\.)(\d{4})#', '$3.$2$1', $str);

echo  '<br></br><a href="regular.php">Назад</a>';
?>