<?php ##Приклад другий
// Найти в тексте адрес E-mail. \S означает "не пробел", а [a-z0-9.]+ -
// "любое число букв, цифр или точек". Модификатор 'i' после '/'
// заставляет PHP не учитывать регистр букв при поиске совпадений.
// Модификатор 's', стоящий рядом с 'i', говорит, что мы работаем
// в "однострочном режиме" (см. ниже в этой главе).
preg_match('#(\S+)@([0-9a-z.]+)#is', 'this is my e-mail: very.nice@ukr.net. List me now!', $matches);
echo '<pre>';
print_r($matches);
echo '</pre>';