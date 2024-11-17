<?php
#№1
$reg   = '#\.#'; // ваша регулярка

$arr[] = 'aaa 12.3 bbb';   // 1
$arr[] = 12.5; // 1
$arr[] = 'aaa 12x bbb';   // 0
$arr[] = 'aaa 12 bbb';    // 0

foreach ($arr as $str) {
	echo $str . ' ' . preg_match($reg, $str) . '<br>';
}

echo  '<br></br><a href="regular.php">Назад</a>';
?>