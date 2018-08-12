<?php ##Генерація сімейства функцій
error_reporting(E_ALL);
ini_set('display_errors', 1);

for ($i = 0; $i < 1000; ++$i) {
    eval("function printSquare$i() { echo $i * $i; }");
}
printSquare303();
