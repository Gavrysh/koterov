<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 12:38
 */

require_once './Others/Cls.php';

$obj = new Cls(100);

$text = serialize($obj);

$fd = fopen('text.obj', 'w');

if (!$fd) {
    exit('Can\'t open the file');
}

fwrite($fd, $text);
fclose($fd);