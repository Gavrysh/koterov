<?php ## Перевірка електроної адреси (не працює на 2-му параметрі filter_var()

error_reporting(E_ALL);
ini_set('display_errors', 1);

$boolean = [
    'yes',
    'no',
    'false',
    123,
    '23',
    'true',
    'six'
];

$email = [
    'very.nice@ukr.net',
    'very.nice@//ukr.da',
    'tut.buv.vasyl@bez.trusiv'
];

$float = [
    'qwerty',
    '22',
    '45,33',
    '33/15',
    '33.01'
];

$int = [
    'false',
    'true',
    '32.00',
    '33',
    33/23,
    33/1,
    15
];

$ip = [
    '127.0.0.1',
    '12/13/44/2',
    'false',
    '255.255.255.0',
    '192.168.0.1'
];

$regexp = [
    '/<(.+?)[\s]*\/?[\s]*>/si',
    '/<(.+?)[\s]*\/?[\s]*>/',
    '<(.+?)[\s]*\/?[\s]*>'
];

$url = [
    'http://php.net/manual/ru/function.strip-tags.php',
    'http://kot.local/email_sanitize.php',
    'github.com',
    'http://github.com',
    'www.github.com',
    'http.www.github.com'
];

function filter($arr, $validate)
{
    $valid = [
        'FILTER_VALIDATE_BOOLEAN',
        'FILTER_VALIDATE_EMAIL',
        'FILTER_VALIDATE_FLOAT',
        'FILTER_VALIDATE_INT',
        'FILTER_VALIDATE_IP',
        'FILTER_VALIDATE_REGEXP',
        'FILTER_VALIDATE_URL'
    ];

    if (!in_array($validate, $valid)) {
        return false;
    }

    echo '<b>'.$validate.'</b><br>';
    foreach ($arr as $item) {
        if (filter_var($item, $validate)) {
            echo 'Correct: '.$item.'<br>';
        } else {
            'Wrong: '.$item.'<br>';
        }
    }
    echo '<hr>';
}

filter($boolean, 'FILTER_VALIDATE_BOOLEAN');