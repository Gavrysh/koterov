<?php ##Простійший генератор

function simple($from = 0, $to = 100)
{
    for ($i = $from; $i <= $to; ++$i) {
        echo 'Значення = '.$i.'<br>';
        yield $i;
    }
}  

foreach (simple() as $val) {
    echo 'квадрат = '.$val * $val.'<br>';
    if ($val >= 5) {
        break;
    }
}