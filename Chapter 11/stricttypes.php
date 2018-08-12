<?php

//Строга типізація
declare(strict_types = 1);
function sum(int $fst, int $snd):int
{
    return $fst + $snd;
}

echo sum(2.5, 2.5).'<br>';  // Fatal Error в PHP < 7,
echo sum(2, 2).'<br>'; //4