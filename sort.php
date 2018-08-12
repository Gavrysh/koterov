<?php ##Новий підхід до створення анонімних функцій

$fruits = ['apple', 'cherry', 'lemon', 'orange'];
usort($fruits, function($a, $b) { return strcmp($a, $b); });

foreach ($fruits as $key => $val) {
    echo $key.': '.$val.'<br>';
}
