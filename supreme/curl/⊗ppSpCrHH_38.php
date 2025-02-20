<?php
	// Адрес страницы для обращения:
	$url = 'http://test.loc';
	
	// Инициализируем сеанс:
	$curl = curl_init();
	
	// Указываем адрес страницы:
	curl_setopt($curl, CURLOPT_URL, $url);
	
	// Ответ сервера сохранять в переменную:
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	
	$headers = [
		'Accept-Language: en-US',
		'Accept: text/html',
		'X-Test: 12345'
	];
	
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


	var_dump($_SERVER['HTTP_ACCEPT_LANGUAGE']);
	var_dump($_SERVER['HTTP_ACCEPT']);

	$res = curl_exec($curl);
	if ($res === false) {
		// Выведем ошибку:
		echo curl_error($curl);
	} else {
		// Выведем результат:
		var_dump($res);
	}
?>