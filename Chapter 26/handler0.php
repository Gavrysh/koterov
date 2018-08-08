<?php

function myErrorHandler($errNo, $msg, $file, $line)
{
    echo 'Помилка з кодом: '.$errNo.'<br>';
    echo 'У файлі: '.$file.'<br>';
    echo 'У рядку номер: '.$line.'<br>';
    echo 'Сповіщення: '.$msg.'<br>';
}

set_error_handler('myErrorHandler', E_ALL);

filemtime('spoon');