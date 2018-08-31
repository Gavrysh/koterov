<?php ## Приклад роботи з TTF-шрифтом

require_once 'lib/imagettf.php';

// Рядок що виводиться
$string = 'Привіт, Мир!';

// Шрифт
$font = getcwd()."/times.ttf";

// Завантажуємо фоновий малюнок
$im = imagecreatefrompng('sample02.png');

// Кут повороту залежить від поточного часу
$angle = (microtime(true) * 10) % 360;

// Якщо бажаєте щоб текст йшов із кута в кут, - розкоментйте рядок
#$angle = rad2deg(atan2(imagesx($im), imagesy($im)));

// Підгоняємо розмір тексту під розмір зображення
$size = imageTtfGetMaxSize($angle, $font, $string, imagesx($im), imagesy($im));

// Створюємо у палітрі нові кольори
$shadow = imagecolorallocate($im, 0, 0, 0);
$color = imagecolorallocate($im, 128, 255, 0);

// Обчислюємо координати виводу, щоб текст опинився у центрі
$sz = imageTtfSize($size, $angle, $font, $string);
$x = (imagesx($im) - $sz[0]) / 2 + $sz[2];
$y = (imagesy($im) - $sz[1]) / 2 + $sz[3];

// Малюємо строку тексту спочатку чорним зі зміщенням, а потім -
// основним коліром поверх (щоб створити ефект тіні)
imagettftext($im, $size, $angle, $x + 3, $y + 2, $shadow, $font, $string);
imagettftext($im, $size, $angle, $x, $y, $shadow, $font, $string);

// Сповіщаємо про те, що далі йде малюнок PNG
header('Content-type: image/png');

// Виводимо малюнок
imagepng($im);