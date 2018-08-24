<?php ## Відправка пошти по шаблону (поганий варіант)

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

    // Розділемо тіло сповіщення та заголовки
    list($head, $body) = preg_split('#\r?\n\r?\n#s', $mail, 2);

    // Відправляємо пошту. Уважно! Небезпечний прийом!
    mail('', '', $body, $head);
}