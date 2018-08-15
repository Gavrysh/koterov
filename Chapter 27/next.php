<?php ##Використання генератору без foreach()

function simple($from = 0, $to = 100)
{
    for ($i = $from; $i < $to; ++$i) {
        yield $i;
    }
}

$obj = simple(1, 7);

//Виконуємо цикл доки ітератор не досягне кінця
while ($obj->valid()) {
    echo ($obj->current() * $obj->current()).'<br>';

    //До наступного елементу
    $obj->next();
}
