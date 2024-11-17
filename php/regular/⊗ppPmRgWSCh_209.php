<?php
#№1 почему я не могу указать ^$ ?
$reg   = '#[\w+]\.[\a-z]{2,}#';
$arr[] = 'site.ru';         
$arr[] = 'site.com';        
$arr[] = 'my-site.com';     
$arr[] = 'my-cool-site.com';
$arr[] = 'my_site.com';     
$arr[] = 'site123.com';     
$arr[] = 'site.travel';     
$arr[] = 'si$te.com';       
$arr[] = 'site.r';          

foreach ($arr as $str) {
	echo $str . ' ' . preg_match($reg, $str) . '<br>';
}

#№2 есть вопросы по этому заданию
#$reg = '#[a-z\d_\.]+@[a-z]+\.[a-z]+$#';
#$reg = '#^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$#';
#$arr[] = 'addr@mail.ru';   
#$arr[] = 'addr123@mail.ru';
#$arr[] = 'my-addr@mail.ru';
#$arr[] = 'my_addr@mail.ru';
#$arr[] = 'addr@site.ru';   
#$arr[] = 'addr.ru';        
#$arr[] = 'addr@.ru';       
#$arr[] = 'my@addr@mail.ru';
#
#foreach ($arr as $str) {
#	echo $str . ' ' . preg_match($reg, $str) . '<br>';
#}

echo  '<br></br><a href="regular.php">Назад</a>';
?>