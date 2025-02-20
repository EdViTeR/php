<?php
// Адрес страницы для обращения:
$url = 'http://test.loc';

// Инициализируем сеанс:
$curl = curl_init();
// Указываем адрес страницы:
curl_setopt($curl, CURLOPT_URL, $url);

// Выполняем запрос:
curl_exec($curl);
?>