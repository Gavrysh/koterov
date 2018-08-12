<?php
function block()
{
    while (true) {
        $string = yield;
        echo $string;
    }
}
$block = block();
$block->send('Hello, World!<br>');
$block->send('Hello, PHP!<br>');