<?php ##Застарілий підхід до створення анонімних функцій
$fruits = ['apple', 'lemon', 'cherry', 'orange'];
usort($fruits, create_function('$a, $b', 'return strcmp($b, $a);'));
foreach ($fruits as $key => $val) {
    echo $key.': '.$val.'<br>';
}
