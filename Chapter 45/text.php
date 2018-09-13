<?php ##

// Формуємо PHAR-архів
$phar = new Phar('text.phar');
$phar->startBuffering();
$phar['largetextfile.txt'] = file_get_contents('./vendor/gases/pager/largetextfile.txt');
$phar->stopBuffering();

// Читаємо вміст PHAR-архіву
echo nl2br(file_get_contents('phar://text.phar/largetextfile.txt'));