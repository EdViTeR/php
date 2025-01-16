<?php

// №1
mkdir('dir');

// №2
$arr = [
	'Первая строка',
	'Вторая строка',
	'Третья строка',
];

foreach ($arr as $key => $value) {
	mkdir($value);
}

// №3
mkdir('test');
file_put_contents('test/1.txt', '!');
file_put_contents('test/2.txt', '!');
file_put_contents('test/3.txt', '!');

// ⊗ppPmFSDRm №1
rmdir('dir');