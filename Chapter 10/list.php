<?php

$listsNames[0] = 'Piter Pen';
$listsNames[1] = 'Vasyl Pupkin';
$listsNames[2] = 'Petro Perebyjnis';

echo '1-й елемент масиву - '.$listsNames[0].'<hr>';

for ($i = 0; $i < count($listsNames); $i++) {
    echo $i.'-st element of array - '.$listsNames[$i].'<br>';
}