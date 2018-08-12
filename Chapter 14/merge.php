<?php ##Об'єднання множин
$native = [
  'red',
  'green',
  'blue'
];
$colors = [
  'yellow',
  'red',
  'green',
  'cyan'
];
$inter = array_unique(array_merge($colors, $native));
echo '<pre>';
print_r($inter);
echo '</pre>';