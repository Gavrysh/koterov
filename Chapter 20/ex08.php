<?php ##Іменування карманів
$str = '2018-06-29';
$re = '#^(?<year>\d{4})-(?<month>\d{2})-(?<day>\d{2})$#';
preg_match($re, $str, $matches) or die('Співпадіння не знайдено!');
echo 'День: '.$matches['day'].'<br>';
echo 'Місяць: '.$matches['month'].'<br>';
echo 'Рік: '.$matches['year'].'<br>';