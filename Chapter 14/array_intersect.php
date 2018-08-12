<?php ##Перетин множин
$native = [
  'green',
  'red',
  'blue'
];
$colors = [
  'red',
  'yellow',
  'green',
  'cyan',
  'black'
];
$inter = array_intersect($colors, $native);
echo '<pre>';
print_r($inter);
echo '</pre>';