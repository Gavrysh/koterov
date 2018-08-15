<?php ##Новий підхід до створення анонімних функцій (використання оператора <=> (spaseship))

$fruits = ['apple', 'cherry', 'lemon', 'orange'];
usort($fruits, function($a, $b) { return $a <=> $b; });

foreach ($fruits as $key => $val) {
    echo $key.': '.$val.'<br>';
}