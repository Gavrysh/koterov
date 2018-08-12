<?php ##Природне сортування
$files = [
  'img1.gif',
  'img10.gif',
  'img20.gif',
  'img2.gif'
];
asort($files);
echo '<pre>';
print_r($files);
echo '</pre>';
natsort($files);
echo '<pre>';
print_r($files);
echo '</pre>';