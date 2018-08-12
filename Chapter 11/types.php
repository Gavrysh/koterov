<?php

//Типи аргументів та повертаємого значення
function sum(int $fst, int $snd): int
{
    return $fst + $snd;
}

echo sum(2, 2).'<br>'; //4
echo sum(2.5, 2.5).'<br>'; //4