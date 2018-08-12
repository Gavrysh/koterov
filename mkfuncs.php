<?php ##Генерування квазіанонімних функцій
error_reporting(E_ALL);
ini_set('display_errors', 1);

$squarers = [];

for ($i = 0; $i < 1000; ++$i) {
    //Створбємо строку, яка кожного разу буде іншою
    $id = uniqid('F');
    //Створюємо функцію
    eval("function $id() { echo $i * $i; }");
    $squarers[] = $id;
}

//Тепер можна визвати функцію, чиє ім\'я береться з масиву
$squarers[303]();
