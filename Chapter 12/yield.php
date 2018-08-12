<?php ##Досліджуємо yield
function generator()
{
    echo 'Перед першим '.yield.'<br>';
    yield 1;
    echo 'Перед другим '.yield.'<br>';
    yield 2;
    echo 'Перед третім '.yield.'<br>';
    yield 3;
    echo 'Після третього '.yield.'<br>';
}
foreach (generator() as $var) {
    echo $var.'<br>';
}