<?php ##Створення анонімних функцій
error_reporting(E_ALL);
ini_set('display_errors', 1);

$mul = create_function('$a, $b', 'return $a * $b;');
$neg = create_function('$a', 'return -$a;');

echo $mul(10, 20).'<br>';
echo $neg(3),'<br>';
