<?php ## Кодування заголовків листа

// Коректно кодує усі заголовки у листі $mail з використанням методу base64.
// Кодування листа визначається автоматично на підставі заголовку Content-type
// Повертає отриманий лист
function mailenc($mail)
{
    // Розділяємо тіло сповіщення та заголовки
    list($head, $body) = preg_split('#\r?\n\r?\n#s', $mail, 2);

    // Визначаємо кодування листа за заголовком Content-type
    $encoding = '';
    if (preg_match('#^Content-type:\s*\S+\s*;\s*charset\s*=\s*(\S+)#mi', $head, $matches)) {
        $encoding = $matches[1];
    }

    // Проходимо по всіх рядках-заголовках
    $newhead = '';
    foreach (preg_split('#\r?\n#s', $head) as $line) {

        // Кодуємо черговий заголовок
        $line = mailenc_header($line, $encoding);
        $newhead .= "$line\r\n";
    }

    // Формуємо остаточний результат
    return "$newhead\r\n$body";
}

// Кодує у рядку максимально можливу послідовність символів, яка починається з недопустимого символу та
// НЕ включаючу e-mail (адреси e-mail обрамляють символами < та >).
// Якщо у рядку відсутній жоден заборонений символ - перетворення не відбувається
function mailenc_header($header, $encoding = 'UTF-8')
{
    return preg_replace_callback(
        '#([\x7F-\xFF][^<>\r\n]*)#s',
        function($param) use ($encoding) {
        // Пробіли наприкінці залишаємо незакодованими
            preg_match('#^(.*?)(\s*)$#s', $param[1], $matches);
            return "=?$encoding?B?".base64_encode($matches[1])."?=".$matches[2];
        },
        $header
    );
}