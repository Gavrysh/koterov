<?php ##Анонімна функція

$myecho = function (...$str)
{
    foreach ($str as $v) {
        echo $v.'<br>';
    }
};
//Визов функції
$myecho('Jupiter', 'Earth', 'Mars', 'Venera', 'Pluton');

