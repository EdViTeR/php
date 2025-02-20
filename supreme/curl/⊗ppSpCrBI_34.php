<?php
	// Адрес страницы для обращения:
	$url = 'http://test.loc';
	// $url = 'http://test/tqweest.loc';
	
	// Инициализируем сеанс:
	$curl = curl_init();
	
	// Указываем адрес страницы:
	curl_setopt($curl, CURLOPT_URL, $url);
	
	// Ответ сервера сохранять в переменную:
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	
	curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)');

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