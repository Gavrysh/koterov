<?php ## Відправлення пошти по шаблону (найкращий варіант)

// Підключаємо функції
require_once 'lib/mailx.php';
require_once 'lib/mailenc.php';

$text = 'Well, now, ain\'t this a surprise?';
$receiver = ["Перебийніс Григорій <perebyjnis@ukr.net>, Голота <golota@ukr.net>"];
$template = file_get_contents('mail.eml');

foreach ($receiver as $to) {
    $mail = $template;
    $mail = strtr($mail, [
        '{TO}'   => $to,
        '{TEXT}' => $text
    ]);
    $mail = mailenc($mail);
    mailx($mail);
}
