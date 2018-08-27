<?php ## Перевірка електроної адреси
$email = [
    'very.nice@ukr.net',
    'very.nice@//ukr.da',
    'tut.buv.vasyl@bez.trusiv'
];

foreach ($email as $item) {
    if (filter_var($item, FILTER_VALIDATE_EMAIL)) {
        echo 'E-mail: '.$item.' - is corretct!<br>';
    } else {
        echo 'E-mail: '.$item.' - is NOT corretct! But ...<br>';
        echo 'Already correct: '.filter_var($item, FILTER_SANITIZE_EMAIL).'<br>';
    }
}