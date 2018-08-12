<?php ##Використовування ключив
function collect($arr, $callback)
{
    foreach ($arr as $key => $value) {
        yield $key => $callback($value);
    }
}
$arr = [
  'first'  => 1,
  'second' => 2,
  'third'  => 3,
  'fourth' => 4,
  'fifth'  => 5,
  'sixth'  => 6
];
$collect = collect($arr, function($e) { return $e * $e; });
foreach ($collect as $key => $value) {
    echo $value.' ('.$key.')<br>';
}

##Повернення значення за посиланням
function &reference()
{
    $value = 3;
    while ($value > 0) {
        yield $value;
    }
}
foreach (reference() as &$number) {
    echo --$number.' ';
}