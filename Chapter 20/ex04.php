<?php ##Найпростіший розбір дати
$str = " 15-16/2000             ";
$re = '#^\s*((\d+)\s*[[:punct:]]\s*(\d+)\s*[[:punct:]]\s*(\d+))\s*$#xs';
//Розіб'ємо рядок за допомогою preg_math() на шматки
preg_match($re, $str, $matches) or die('Not a date! '.$str);
//Наразі розбираймося з карманами
echo '<pre>';
print_r($matches);
echo '</pre>';
echo 'Дата без пробілів: '.$matches[1].'<br>';
echo 'День: '.$matches[2].'<br>';
echo 'Місяць: '.$matches[3].'<br>';
echo 'Рік: '.$matches[4].'<br>';