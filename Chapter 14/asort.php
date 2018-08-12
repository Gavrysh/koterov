<?php ##Сортування масиву за значеннями
$A = [
  'a' => 'Zerro',
  'b' => 'Weapon',
  'c' => 'Father',
  'd' => 'Mather'
];
asort($A);
print_r($A);
echo '<br>';
arsort($A);
print_r($A);
