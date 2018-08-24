<?php ## Відправлення пошти по шаблону (найкращий варіант)

// Підключаємо функції
require_once 'lib/mailx.php';
require_once 'lib/mailenc.php';
require_once 'lib/template.php';

$text = 'Well, now, ain\'t this a surprise?';
$receiver = ["Перебийніс Григорій <perebyjnis@ukr.net>, Голота <golota@ukr.net>"];

foreach ($receiver as $to) {

    // 'Розгортаємо' шаблон, передаючи йому $to та $text
    $mail = template('mail.php.eml', [
        'to'   => $to,
        'text' => $text
    ]);

    // Далі, як зазвичай - кодуємо та відправляємо
    $mail = mailenc($mail);
    mailx($mail);
}