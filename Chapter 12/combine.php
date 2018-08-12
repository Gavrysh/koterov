<?php ##Квадрати парних елементів
$arr = [1, 2, 3, 4, 5,6];
$select = select($arr, function($e) { return $e % 2 == 0 ? true : false; });
$collect = collect($select, function($e) { return $e * $e; });
foreach ($collect as $val) {
    echo $val.'';
}