<?php ##Модель циклічного процесу з виключним блокуванням
$file = 'file.txt';

//Спочатку створимо порожній файл, ЯКЩО ВІН ЩЕ НЕ ІСНУЄ
//Якщо файл вже існує, - це його не зруйнує
fclose(fopen($file, 'a+b'));

//Блокуємо файл
$f = fopen($file, 'r+b') or die('Помилка відкриття файлу');
while (true) {
    flock($f, LOCK_EX); //очикуємо, поки ми не станемо єдиними
    //...
    //У цій точці ми можемо бути впевнені у тому, що тільки ця програма
    //працює з файлом
    //...
    fflush($f); //скидаємо буфери на діск
    flock($f, LOCK_UN); //Звільнюємо файл
    //Наприклад, засинаємо на 10 секунд
    sleep(10);
}
fclose($f);