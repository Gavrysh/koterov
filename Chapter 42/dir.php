<?php ## Посторінкова навігація по каталогу
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once './vendor/autoload.php';

$obj = new \GSPager\DirPager(
    new \GSPager\PageList(),
    'photos',
    3,
    2);

// Вміст поточної сторінки
foreach ($obj->getItems() as $img) {
    echo "<img src='$img'>";
}

// Посторінкова навігація
echo '<p>'.$obj.'</p>';