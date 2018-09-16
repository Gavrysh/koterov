<?php ## Робота з обробниками буферів
error_reporting(E_ALL);
ini_set('display_errors', 1);

function ob_linearize($text)
{
    // Видалити з тексту усі переноси рядків та повторювані пробіли
    return preg_replace('#[\r\n\s]+#s', ' ', trim($text));
}

// Перехоплюваний вихідний поток з встановленням обробника
ob_start('ob_linearize');

// Далі йде звичайне виконання скрипта. Він може виводити усе, що завгодно -
// на кінці з тексту будуть видалені всі переводи рядків.
echo htmlspecialchars(file_get_contents(__FILE__));