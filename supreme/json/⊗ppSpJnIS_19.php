<?php

$json = '["a", "b", "c"]';
$data = json_decode($json);

if ($data) {
	var_dump($data);
} else {
	echo 'Некорректный запрос';
}