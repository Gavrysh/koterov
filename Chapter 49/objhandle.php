<?php ## Робота з буфером виводу в об'єктному стилі
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Buffering' . DIRECTORY_SEPARATOR . 'Output.php';

// Перехоплюємо вихідний поток у програмі
$h = new \Buffering\Output();

    // Текст потрапляє у буфер
    echo 'Початок зовнішнього перехвату'.'<br>';

    // Визиваємо функцію, "не знаючи" що вона перехоплює вивод
    $formatted = inner();

    // Друкуємо ще текст у буфер
    echo 'Кінець зовнішнього перехвату.';

    // Формуємо деякий текст по шаблону
    $text = "{$h->__toString()}<br>Функція повернула: \"$formatted\"";

// Завершуємо перехват. Буфер звільниться автоматично у деструкторі
$h = null;

// Друкуємо те, що накопичилось у змінній
echo $text;
exit();

// Функція, яка перехоплює вихідний поток у своїх цілях, гарантує, що при воході буфер буде відновлений
function inner()
{
    $buf = new \Buffering\Output();
    echo 'Цей текст попадає у буфер';
    return "<b>{$buf->__toString()}</b>";

    // Не потрібно турбуватись про ручний визов ob_end_clean().
    // Це автоматично робить деструктор об'єкту $buf!
}