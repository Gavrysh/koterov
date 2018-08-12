<?php ##Кожний генератор - це об'єкт
function simple($from = 0, $to = 100)
{
    for ($i = $from; $i <= $to; ++$i) {
        echo 'значення = '.$i.'<br>';
        yield $i;
    }
}

$generator = simple();
echo gettype($generator);