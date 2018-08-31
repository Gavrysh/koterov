<?php ## Зміна пера

// Створюємо нове зображення
$im = imagecreate(100, 100);
$w = imagecolorallocate($im, 255, 255, 255);
$c1 = imagecolorallocate($im, 0, 0, 255);
$c2 = imagecolorallocate($im, 0, 255, 0);

// Очищуємо фон
imagefilledrectangle($im, 0, 0, imagesx($im), imagesy($im), $w);

// Встановлюємо стиль пера
$style = [$c2, $c2, $c2, $c2, $c2, $c2, $c2, $c1, $c1, $c1, $c1];
imagesetstyle($im, $style);

// Встановлюємо товщину пера
imagesetthickness($im, 2);

// Малюємо лінію
imageline($im, 0, 0, 100, 100, IMG_COLOR_STYLED);

// Виводимо зображення у браузер
header('Content-type: image/png');

imagepng($im);