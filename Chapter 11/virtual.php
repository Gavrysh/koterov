<?php ##Емуляція virtual() у CGI-версії PHP
//Функція virtual() не підтримується?
if (!function_exists('virtual')) {
    //Тоді визначаємо свою
    echo 'virtual';
    function virtual($uri)
    {
        $url = 'http://'.$_SERVER['HTTP_HOST'].$uri;
        echo file_get_contents($url);
    }
}
//Приклад - виводить кореневу сторінку сайту
virtual('/');