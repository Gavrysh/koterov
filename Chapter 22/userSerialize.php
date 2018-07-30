<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 12:57
 */

require_once './Others/User.php';

$obj = new User('Michel', 'Bananan');

echo '<pre>';
print_r($obj);
echo '</pre>';

$textObj = serialize($obj);

echo $textObj;

sleep(2);

$obj = unserialize($textObj);

echo '<pre>';
print_r($obj);
echo '</pre>';
