<?php ##Використання функції popen()
 define('START_TIME', microtime(true));
//Запускаємо процес (паралельно роботі сценарію) у режимі читання
$fp = popen('c:\OSPanel\modules\sendmail -t -i', 'wb');
//передаємо процесу тло листа у стандартний вхідний поток
fwrite($fp, 'From: our script <script@ukr.net><br>');
fwrite($fp, 'To: very.nice@ukr.net<br>');
fwrite($fp, 'Subject: here is myself<br>');
fwrite($fp, '<br>');
fwrite($fp, file_get_contents(__FILE__));
//не забуваємо також закрити канал
pclose($fp);
printf('Час роботи скрипту: %.5f c', microtime(true) - START_TIME);