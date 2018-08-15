<?php ## Створення генератору
function simple($from = 0, $to = 100 ) {
    for ($i = $from; $i < $to; ++$i) {
        yield $i;
    }
}

foreach (simple(1, 7) as $key => $val) {
    echo $key.': '.$val.' ';
    echo 'Result: '.($val * $val).'<br>';
}
