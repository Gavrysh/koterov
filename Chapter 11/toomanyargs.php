<?php

//Використання ...
function toomanyargs($fst, $snd, $thd, $fth) {
    echo 'Перший параметр: '.$fst.'<br>';
    echo 'Другий параметр: '.$snd.'<br>';
    echo 'Третій параметр: '.$thd.'<br>';
    echo 'Четвертий параметр: '.$fth.'<br>';
}
$planets = [
  'Earth',
  'Mars',
  'Jupiter',
  'Venera'
];

toomanyargs(...$planets);