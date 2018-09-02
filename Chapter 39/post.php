<?php ## Відправка даних методом POST
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Задаємо адресу віддаленного серверу
$curl = curl_init('http://kot.local/handler.php');

// Передача даних відбувається методом POST
curl_setopt($curl, CURLOPT_POST, 1);

// Задаємо POST-дані
$data = "name=".urlencode("Ігор")."&password=".urlencode("password")."\r\n\r\n";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

// Виконуємо запит
curl_exec($curl);

// Закриваємо CURL-з'єднання
curl_close($curl);