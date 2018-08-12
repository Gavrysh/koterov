<?php

function silly() {
    return [1, 2, 3];
}

$arr = silly();
var_dump($arr);

//Присвоюємо змінним $a, $b, $c перші значення зі списку
list($a, $b, $c) = silly();

//Припустимо із PHP 5.4
echo silly()[2];