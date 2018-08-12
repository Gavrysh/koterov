<?php ##Сортування списків (випадок з асоціативним масивом)
$A = [
  'a' => 'Zero',
  'b' => 'Weapon',
  'c' => 'Processor',
  'd' => 'Alpha'
];
sort($A);
echo '<pre>';
print_r($A);
echo '</pre>';