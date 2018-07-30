<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 12:45
 */

require_once './Others/Cls.php';

$fd = fopen('text.obj', 'r');
if (!$fd) {
    exit('Can\'t open the file!');
}
$text = fread($fd, filesize('text.obj'));
fclose($fd);

$obj = unserialize($text);

echo '<pre>';
print_r($obj);
echo '</pre>';