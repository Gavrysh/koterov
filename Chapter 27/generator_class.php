<?php ##Генератори повертають обєкт типу Generstor

function simple($from = 0, $to = 100)
{
    for ($i = $from; $i < $to; ++$i) {
        yield $i;
    }
}

$obj = simple(1, 7);
var_dump($obj);