<?php ## Отримання заголовків запиту
error_reporting(E_ALL);
ini_set('display_errors', 1);

$headers = getallheaders();
Header("Content-type: text/plain");

print_r($headers);