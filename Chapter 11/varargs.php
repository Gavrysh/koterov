<?php

//Змінне число параметрів функції (сучасний спосіб)
function myecho(...$planets) {
    foreach ($planets as $v) {
        echo $v.'<br>';
    }
}

myecho('Earth', 'Mars', 'Jupiter');