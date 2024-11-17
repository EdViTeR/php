<?php
#№1
$str = '2 4 5 12';
$res = preg_replace_callback('#(\d+)#', function($match) {
	return $match[1]**2;
}, $str); 

echo $res;

echo  '<br></br><a href="regular.php">Назад</a>';
?>