<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 11:52
 */

require_once './Others/Counter.php';

for ($obj = [], $n = 0; $n < 6; ++$n) {
    $obj[] = new Counter;
}

echo 'Now there is '.$obj[0]->getCount().' ojects.<br>';

$obj[5] = null;

echo 'It is now - '.$obj[0]->getCount().' objects.<br>';

$obj = [];

echo 'At the end, '.Counter::getCount().' objects.<br>';