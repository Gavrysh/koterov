<?php ## Використання компонента GSPager
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once './vendor/autoload.php';

$obj = new GSPager\FilePager(
    new GSPager\ItemsRange(),
    './vendor/gases/pager/largetextfile.txt');

// Вміст поточної сторінки
foreach ($obj->getItems() as $line) {
    echo htmlspecialchars($line).'<br>';
}

// Посторінкова навігація
echo '<p>'.$obj.'</p>';