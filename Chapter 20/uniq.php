<?php ##Выделение уникальных слов в тексте
// Эта функция выделяет из текста в $text все уникальные слова и
// возвращает их список. В необязательный параметр $nOrigWords
// помещается исходное число слов в тексте, которое было до
// "фильтрации" дубликатов.
function getUniques($text, &$nOrigWorlds = false)
{
    $worlds = preg_split('#([^[:alnum:]]|[\'-])+#s', $text);
    $nOrigWorlds = count($worlds);
    //Переводимо слова у нижній регістр
    $words = array_map('strtolower', $worlds);
    //Повертаємо унікальні слова
    return array_unique($words);
}
//Приклад використання функції
setlocale(LC_ALL, 'uk_UA.UTF-8');
$fname = 'largetextfile.txt';
$text = file_get_contents($fname);
$uniq = getUniques($text, $nOrig);
echo 'Було слів: '.$nOrig.'<br>';
echo 'Стало слів: '.count($uniq).'<hr>';
echo join(' ', $uniq);