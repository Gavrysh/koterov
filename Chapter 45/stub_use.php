<?php ## Скрипт Не працює належним чином
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'autopager.phar';

$obj = new GSPager\FilePager(
    new GSPager\PageList(),
    './vendor/gases/pager/largetextfile.txt');

// Вміст поточної сторінки
foreach ($obj->getItems() as $line) {
    echo htmlspecialchars($line).'<br>';
}

echo '<p>'.$obj.'</p>';