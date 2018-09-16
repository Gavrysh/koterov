<?php ## Коректність \Buffering\Output::__toString()
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Buffering' . DIRECTORY_SEPARATOR . 'Output.php';

// Перехоплюємо вихідний поток у програмі
$h1 = new \Buffering\Output();

    // Виводимо деякий текст
    echo 'Текст у першому буфері';

    // Ще раз перехоплюємо вихідний поток (у вкладений спосіб)
    $h2 = new \Buffering\Output();

        // Виводимо інший текст
        echo 'Текст у другому буфері';

        // Тепер зберігаємо у змінних те що було накопичено у буферах
        $first = $h1->__toString();
        $second = $h2->__toString();

    // Знищуємо другий буфер
    $h2 = null;

// Знищуємо перший буфер
$h1 = null;

// Виводимо раніше збережений текст
echo "1.{$first}<br>";
echo "2.{$second}<br>";
