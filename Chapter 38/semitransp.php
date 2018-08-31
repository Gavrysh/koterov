<?php ## Робота з напівпрозорими кольорами

$size = 300;
$im = imagecreatetruecolor($size, $size);
$back = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im, 0, 0, $size - 1, $size - 1, $back);

// Створюємо ідентифікатори напівпрозорих кольорів
$yelow = imagecolorallocatealpha($im, 255, 255, 0, 75);
$red = imagecolorallocatealpha($im, 255, 0, 0, 75);
$blue = imagecolorallocatealpha($im, 0, 0, 255, 75);

// Малюємо три кола які перетинають один одне
$radius = 150;
imagefilledellipse($im, 100, 75, $radius, $radius, $yelow);
imagefilledellipse($im, 120, 165, $radius, $radius, $red);
imagefilledellipse($im, 187, 125, $radius, $radius, $blue);

// Виводимо зображення у браузер
header('Content-type: image/png');
imagepng($im);

// Наприкінці звільняємо пам'ять, яку займає малюнок
imagedestroy($im);