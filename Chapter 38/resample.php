<?php ## Збільшування картинки зі згладжуванням

$from = imagecreatefromjpeg('sample.jpg');
$to = imagecreatetruecolor(2000, 2000);
imagecopyresampled($to, $from, 0, 0, 0, 0, imagesx($to), imagesy($to), imagesx($from), imagesy($from));
header('Content-type: image/jpeg');
imagejpeg($to);