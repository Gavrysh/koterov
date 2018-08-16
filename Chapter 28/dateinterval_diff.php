<?php ## Використання методу diff()

$date = new DateTime('2018-01-01 00:00:00', new DateTimeZone('Europe/Kiev'));
$nowdate = new DateTime();

$interval = $nowdate->diff($date);

// Виводимо результати
echo $date->format('d-m-Y H:i:s').'<br>';
echo $nowdate->format('d-m-Y H:i:s').'<br>';

// Виводимо різницю
echo $interval->format('%Y-%m-%d %H:%S').'<br>';

// Виводимо дамп інтервалу
echo '<pre>';
print_r($interval);
echo '</pre>';