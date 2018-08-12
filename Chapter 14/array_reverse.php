<?php ##Перевертання массиву
$A = [
  'a' => 'Weapon',
  'b' => 'Zerro',
  'c' => 'Processor',
  'd' => 'Alpha'
];
asort($A);
$A = array_reverse($A);
echo '<pre>';
print_r($A);
echo '</pre>';