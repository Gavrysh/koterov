<?php ##Скрипт-лічильник з блокуванням
$file = 'counter.dat';
fclose(fopen($file, 'a+b')); //створюємо попередньо порожній файл
$f = fopen($file, 'r+b'); //відкриваємо файл лічильника
flock($f, LOCK_EX); //надалі працюємо тільки ми
$count = fread($f, 100); //читаємо значення, збережене у файлі
$count = $count + 1; //збільшуємо його на одиницю (порожній рядок = 0)
ftruncate($f, 0); //робимо очищення файлу
fseek($f, 0, SEEK_SET); //перейдемо на початок файлу
fwrite($f, $count); //записуємо нове значення
fclose($f); //закриваємо файл
echo $count.'<br>'; //друкуємо показник лічильника