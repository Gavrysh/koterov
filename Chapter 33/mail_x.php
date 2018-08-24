<?php ## Відправка пошти по шаблону (без кодування)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Підключаємо функцію mailx()
require_once 'lib/mailx.php';

// Цей текст може бути отриманий, наприклад, із бази даних, або бути сповіщенням з форуму чи гостьової книги
$text = 'Cookies need love like everything does.';

// Отримувачи листа
$receiver = [
    'very.nice@ukr.net',
    'veri.nice@i.ua'
];

// Зчитуємо шаблон з файлу
$template = file_get_contents('mail.eml');

// Відправляємо листи у циклі по отримувачам
foreach ($receiver as $item) {
    $mail = $template;
    $mail = strtr($mail, ['{TO}' => $item, '{TEXT}' => $text]);

    // Визиваємо mailx(), під'єднану із файлу
    mailx($mail);
}

echo $mail;