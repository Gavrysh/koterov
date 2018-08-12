<?php ##Сортування масиву за значеннями
$A = [
  'a' => 'Zerro',
  'b' => 'Weapon',
  'c' => 'Father',
  'd' => 'Mather'
];
ksort($A);
print_r($A);
echo '<br>';
krsort($A);
print_r($A);