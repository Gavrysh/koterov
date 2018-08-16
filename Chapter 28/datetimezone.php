<?php ## Використання класу DateTimeZone

$date = new DateTime('2018-08-16 15:50:00', new DateTimeZone('Europe/Kiev'));

echo $date->format('d-m-Y H:i:s'); // 16-08-2018 15:50:00