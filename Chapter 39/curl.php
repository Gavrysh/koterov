<?php ## Використання CURL

// Задаємо адресу віддаленного серверу
$curl = curl_init('http://php.net');

// Отримуємо вміст сторінки
echo curl_exec($curl);

// Закриваємо CURL з'єднання
curl_close($curl);