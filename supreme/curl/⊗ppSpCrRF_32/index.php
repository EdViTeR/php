<?php
	// Адрес страницы для обращения:
	$url = 'http://php/supreme/curl/%e2%8a%97ppSpCrRF_32/page1.php';
	
	// Инициализируем сеанс:
	$curl = curl_init();
	
	// Указываем адрес страницы:
	curl_setopt($curl, CURLOPT_URL, $url);
	
	// Ответ сервера сохранять в переменную:
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	
	// Выполняем запрос, сохранив ответ в переменную:
	$res = curl_exec($curl);

	if ($res === false) {
		// Выведем ошибку:
		echo curl_error($curl);
	} else {
		// Выведем результат:
		var_dump($res);
	}
?>