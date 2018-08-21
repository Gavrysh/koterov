<?php ## Приклад роботи з fopen wrappers

echo '<h1>Перша сторінка (HTTP)</h1>';
echo file_get_contents('http://php.net');

echo '<h1>Друга сторінка (FTP)</h1>';
echo file_get_contents('ftp://ftp.aha.ru/robots.txt');