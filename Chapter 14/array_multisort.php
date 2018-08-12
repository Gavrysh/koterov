<?php ##Використання функції array_multisort()
$arr1 = [
  3,
  4,
  5,
  1,
  0,
  15
];
$arr2 = [
  'world',
  'hello',
  'fm1',
  'popsa',
  'Ukraine',
  'rock'
];
array_multisort($arr1, $arr2);
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';

//сортування у звортньому напрямку
$arr3 = [
  3,
  4,
  5,
  1,
  0,
  15
];
$arr4 = [
  'world',
  'hello',
  'fm1',
  'popsa',
  'Ukraine',
  'rock'
];
array_multisort($arr3, SORT_DESC, SORT_NUMERIC, $arr4);
echo '<pre>';
print_r($arr3);
print_r($arr4);
echo '</pre>';