<?php ##Передача анонимной функции в качестве параметра
function tabber($spaces, $myecho, ...$planets)
{
    //Готуємо аргументи для myecho()
    $new = [];
    foreach ($planets as $v) {
        $new[] = str_repeat('&nbsp;', $spaces).$v;
    }
    //Користувацький ввод задається зовні
    $myecho(...$new);
}

//Масив для виводу
$planets = ['Jupiter', 'Mars', 'Earth', 'Venera', 'Pluton'];
//Відображаємо строки, одна за одною
tabber(10, function(...$str)
{
    foreach ($str as $v) {
        echo $v.'<br>';
    }
}, ...$planets);