<?php
#№1 не понимаю
// $reg = '#(?|(\d{2}))(?|(\d{2}))(?|19(9\d)|20(\d\d))#';
$reg = '#19(9\d)|20(\d\d)#';
$arr = [
	'31-12-2025',
	'30-11-1995',
	'29-10-1990',
];
foreach ($arr as $key => $value) {
	preg_match($reg, $value, $res);
}
var_dump($res);

echo  '<br></br><a href="regular.php">Назад</a>';