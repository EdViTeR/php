<?php
	// Адрес страницы для обращения:
	$url = 'http://test.loc';
	
	// Инициализируем сеанс:
	$curl = curl_init();
	
	// Указываем адрес страницы:
	curl_setopt($curl, CURLOPT_URL, $url);
	
	$cookieFilePath = $_SERVER['DOCUMENT_ROOT'] . '/cookie.txt';
	
	curl_setopt($curl, CURLOPT_COOKIEFILE, $cookieFilePath);
	curl_setopt($curl, CURLOPT_COOKIEJAR,  $cookieFilePath);

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