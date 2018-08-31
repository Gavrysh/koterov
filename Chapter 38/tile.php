<?php ## Збільшення картинки зі згладжуванням
error_reporting(E_ALL);
ini_set('display_errors', 1);

$tile = imagecreatefromjpeg('sample1.jpg');

$im = imagecreatetruecolor(1400, 1400);

imagefill($im, 0, 0, imagecolorallocate($im, 0, 255, 0));
imagesettile($im, $tile);

// Створюємо масив точок з випадковими координатами
$p = [];
for ($i = 0; $i < 4; ++$i) {
    array_push($p, mt_rand(0, imagesx($im)), mt_rand(0, imagesy($im)));
}

echo '<pre>';
print_r($p);
echo '</pre>';
echo count($p)/2;

// Малюємо зафарбований багатокутник
imagefilledpolygon($im, $p, count($p)/2, IMG_COLOR_TILED);

// Виводимо результат
header('Content-type: image/jpeg');

// Виводимо зображення з максимальною якістю 100

imagejpeg($im, null, 100);

// Можна було стиснути за допомогоб PNG
#header('Content-type: image/png');
#imagepng($im);