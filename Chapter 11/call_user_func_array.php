<?php ##Використання call_user_func_array()

//Вивод усіх параметрів на окремих строках
function myecho(...$str)
{
    foreach ($str as $v) {
        echo $v.'<br>'; //вивод елементу
    }
}

//Те ж саме, тільки передує параметри вказаним числом пробілів
function tabber($spaces, ...$planets)
{
    //Готуємо аргументи для myecho()
    $new = [];
    foreach ($planets as $p) {
        $new[] = str_repeat('&nbsp;', $spaces).$p;
    }
    //Визиваємо myecho() з новими параметрами
    call_user_func_array('myecho', $new);
}
//Відображення строк однієї під іншою
tabber(10, 'Venera', 'Earth', 'Mars', 'Jupiter', 'Pluton');