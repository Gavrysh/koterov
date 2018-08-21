<?php ## Відправка POST-даних напряму
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Вміст POST-запиту
$body = 'firstName=Sergiy&lastName=Gavrysh';

$opts = [
    'http' => [
        'method'     => 'POST',
        'user_agent' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0',
        'header'     => "Content-Type: application/x-www-form-urlencoded\r\n".
                        "Content-Length: ".mb_strlen($body),
        'content'    => $body
    ]
];

//echo '<pre>';
//print_r($opts);
//echo '</pre>';

// Формуємо контекст
$context = stream_context_create($opts);

// Відправляємо запит
echo file_get_contents('http://kot.local/handler.php', false, $context);