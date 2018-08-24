<?php ## Більш зручна відправка пошти

// Функція відправляє лист, повністю заданий у параметрі $mail.
function mailx($mail)
{
    // Розділяємо тіло сповіщення та заголовок
    list($head, $body) = preg_split('#\r?\n\r?\n#s', $mail, 2);

    // Виділяємо заголовок To
    $to = '';
    if (preg_match('#^To:\s([^\r\n]*)[\r\n]*#m', $head, $maches)) {
        $to = @$maches[1]; // зберігаємо
        $head = str_replace($maches[0], '', $head); // видаляємо з первісного рядку
    }

    // Виділяємо Subject.
    $subject = '';
    if (preg_match('#^Subject:\s([^\r\n]*)[\r\n]*#m', $head,$maches)) {
        $subject = @$maches[1];
        $head = str_replace($maches[0], '', $head);
    }

    // Відправляємо пошту
    mail($to, $subject, $body, trim($head));
}