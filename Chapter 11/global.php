<?php

//Глобальні змінні у функції
$monthes = [
  1 => 'Січень',
  2 => 'Лютий',
  3 => 'Березень',
  4 => 'Квітень',
  5 => 'Травень',
  6 => 'Червень',
  7 => 'Липень',
  8 => 'Серпень',
  9 => 'Вересень',
  10 => 'Жовтень',
  11 => 'Листопад',
  12 => 'Грудень',
];

function getMonthName($n)
{
    global $monthes;
    return $monthes[$n].'<br>';
}

function getMonthName1($n)
{
    return $GLOBALS['monthes'][$n];
}

echo getMonthName(5); //Травень
echo getMonthName1(4); //Квітень