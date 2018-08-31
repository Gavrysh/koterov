<?php ## Автовизначення MIME-типу зображення
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Вибираємо випадкове зображення любого формату
$fnames = glob("*{jpg,png,gif}", GLOB_BRACE);
$fname = $fnames[mt_rand(0, count($fnames) - 1)];

// Визначаємо формат
$size = getimagesize($fname);

// Виводимо зображення
header("Content-type: {$size['mime']}");
echo file_get_contents($fname);