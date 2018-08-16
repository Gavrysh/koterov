<?php ## Використання констант класу DateTime

$date = new DateTime('2018-08-16 15:46:00');
echo $date->format(DateTime::RSS); // Thu, 16 Aug 2018 15:46:00 +0300
