<?php ##Транслітерація строк (простий варіант) - не працює з українськими символами
header('Content-Type: text/html; charset=utf-8');
function transliterate($st)
{
    $st = strtr($st,
      'абвгґдезиійклмнопрстуфАБВГҐДЕЗИІЙКЛМНОПРСТУФ', 
      'abvhgdezyiiklmnoprstufABVHGDEZYIIKLMNOPRSTUF'
    );
    $st = strtr($st,
      array(
        'є' => 'ie',
        'ї' => 'i',
        'й' => 'i',
        'ю' => 'iu',
        'я' => 'ia',
        'Є' => 'IE',
        'Ї' => 'I',
        'Й' => 'I',
        'Ю' => 'IU',
        'Я' => 'IA'
      )
    );
    return $st;
}
echo transliterate('У попа собака був, він його любив!');