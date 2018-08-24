<?php ## Обробка шаблону

// Функція робить те ж саме що і інструкція include, проте блокує вивод тексту у браузер.
// Замість цього текст повертається у якості результату.
// Функцію можна використовувати, наприклад, для обробки поштових шаблонів
function template($__fname, $vars)
{
    // Перехоплюємо вихідний поток
    ob_start();

        // Запускаємо файл як програму на PHP
        extract($vars, EXTR_OVERWRITE);
        include($__fname);

        // Отримуємо перехоплений текст
        $text = ob_get_contents();
    ob_get_clean();

    return $text;
}
