<?php ## Передача користувацького агента
// Задаємо адресу віддаленого серверу

$curl = curl_init('http://kot.local/handler.php');

// Встановлюємо реферер
$useragent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1';
curl_setopt($curl, CURLOPT_USERAGENT, $useragent);

// Виконуємо запит
curl_exec($curl);

// Закриваємо з'єднання
curl_close($curl);
echo '<pre>';
print_r($_SERVER);
echo '</pre>';