<?php ## Використання контексту потока
error_reporting(E_ALL);
ini_set('display_errors', 1);

$opts = [
    'http' => [
        'method'     => 'GET',
        'user_agent' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0',
        'header'     => "Content-type: text/html; charset=UTF-8\r\n"
    ]
];
echo file_get_contents('http://php.net', false, stream_context_create($opts));