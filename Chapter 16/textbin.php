<?php ##Різниця текстового та бінарних режимів
//Отримує у параметрах строку та повертає через пробіл коди
//символів із котрих вона складається
function makeHex($st)
{
    for ($i = 0; $i <= strlen($st); ++$i) {
        $hex[] = sprintf('%02X', ord($st[$i]));
    }
    return join(' ', $hex);
}

//Відкриваємо файл скрипту в різний спосіб
$f = fopen(__FILE__, 'rb');  //бінарний режим
echo makeHex(fgets($f, 100)), "<br>\n";

$f = fopen(__FILE__, 'rt');  //текстовий режим
echo makeHex(fgets($f, 100)), "<br>\n";