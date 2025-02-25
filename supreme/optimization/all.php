<?php

// ⊗ppSpOtRO_84 №1
$first_date = date('Y');
if ($first_date >= 2018 and $first_date <= 2020) {
	echo 'год ' . $first_date . ' подходит';
} else {
	echo 'год ' . $first_date . ' не подходит';
}
// №2
$password = 'abcde';

$str = strlen($password);
if ($str >= 2 and $str <= 10) { 
	echo 'длина пароля подходит';
} else {
	echo 'плохая длина пароля';
}
/////////////////////////////////////////////////////////////////
// ⊗ppSpOtRHO_85 №1
$num = 1233456789;
$need_num = getSumSquare($num);

if ($need_num >= 10 and $need_num <= 100) { 
	echo 'верно';
} else {
	echo 'неверно';
}

function getSumSquare($num) {
	$digits = explode(' ', $num);
	$sum = 0;
	foreach ($digits as $digit) {
		$sum += $digit * $digit;
	}
	
	return $digit;
}
/////////////////////////////////////////////////////////////////
// ⊗ppSpOtLO_86 №1
$date = (int)date('d');
for ($i = 1; $i <= 31; $i++) {
	if ($i === $date) {
		echo "<b>$i</b><br>";
	} else {
		echo "$i<br>";
	}
}
/////////////////////////////////////////////////////////////////
// ⊗ppSpOtLAC_87 №1
$arr = [1, 2, 2, 4, 5];

$len = count($arr);
for ($i = 1; $i < $len; $i++) {
	if ($arr[$i - 1] === $arr[$i]) {
		echo $arr[$i] . '<br>';
	}
}
/////////////////////////////////////////////////////////////////
// ⊗ppSpOtEI_88 №1
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$sum = 0;
$i = 1;
foreach ($arr as $elem) {
	$sum += $elem;
	
	if ($sum <= 10) {
		$i++;
	} else {
		break;
	}
}
echo $i;
// №2
for ($i = 0; $i <= 100; $i += 2) {
    echo $i;
}
// №3
for ($i = 0; $i <= 100; $i += 6) {
    echo $i;
}
/////////////////////////////////////////////////////////////////
// ⊗ppSpOtIF_89 №1
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo array_sum($arr);
// №2
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo array_product($arr);
/////////////////////////////////////////////////////////////////
// ⊗ppSpOtOA_90 №1
$n = 1000;
echo $n/5;
/////////////////////////////////////////////////////////////////
// ⊗ppSpOtRg_91 №1
$str = '1233345';
if (strpos($str, '333') !== false) {
    echo 'есть';
} else {
    echo 'нет';
}
// №2
$str = 'index.html';
if (str_ends_with($str, '.html')) {
	echo 'да';
} else {
	echo 'нет';
}
// №3
$str = 'index.png';
if (in_array(substr($str, -4), ['.png', '.jpg'])) {
	echo 'да';
} else {
	echo 'нет';
}
/////////////////////////////////////////////////////////////////
// ⊗ppSpOtSQ_92 №1
$arr = [1, 2, 2, 4, 5];
$str = implode(',', $ids);
$res = [];
for ($i = 1; $i < count($arr); $i++) {
	$note = mysqli_query($link, "SELECT * FROM users WHERE id IN ($str)"); 
	for ($data = []; $row = mysqli_fetch_assoc($note); $data[] = $row); 
	$res[] = $data;
}
var_dump($res);
/////////////////////////////////////////////////////////////////
// ⊗ppSpOtAU_94 №1
$n = 100;
function factorial($n) {
	if($n <= 1) {
		return 1;
	} else {
		return $n * factorial($n - 1);  
	}
}
echo factorial($n);
// №2
$len = 0;
for ($i = 1; $i <= 1000000; $i++) {
    $len += strlen((string)$i);
}
echo $len;
// №3
$num = 1000;
echo round(1000/7);
// №4
$num = 320;
$sum = 0;
$sqnum = sqrt($num);
for ($i = 1; $i <= $sqnum; $i++) {
    if ($num % $i == 0) {
        $sum += $i;
        $div = $num / $i;
        if ($i != $div) {
            $sum += $div;
        }
    }
}
echo $sum;
/////////////////////////////////////////////////////////////////
// ⊗ppSpOtAC_95 №1
$str = '123345';
echo strrev($str);
// №2
$str = 'aaa bbb ccc';
echo iconv_strlen($str);