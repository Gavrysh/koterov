<?php ## Отримання HTTP-заголовків

function getContent($hostName)
{
    // Задаємо адресу віддаленного серверу
    $curl = curl_init($hostName);

    // Повернути результат у вигляді рядку
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // Включити у результат HTTP-заголовки
    curl_setopt($curl, CURLOPT_HEADER, 1);

    // Виключити тіло HTTP-документу
    curl_setopt($curl, CURLOPT_NOBODY, 1);

    // Отримуємо HTTP-заголовки
    $content = curl_exec($curl);

    // Закриваємо CURL-з'єднання
    curl_close($curl);

    // Перетворюємо рядок $content у масив
    return explode('\r\n', $content);
}

$hostName = 'http://php.net';
$out = getContent($hostName);

echo '<pre>';
print_r($out);
echo '</pre>';