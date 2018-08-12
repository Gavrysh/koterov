<?php ##Вкладені функції
function father($a)
{
    echo $a.'<br>';
    function child($b)
    {
        echo ($b + 1).'<br>';
        return $b * $b;
    }
    return $a * $a * child($a); //Фактично повертає $a * $a * ($a + 1) * ($a + 1)
}
//Визов функції
father(10);
child(30);