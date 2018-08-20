<?php ## Лічильник відвідування сторінки користувачем
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
++$counter;
setcookie('counter', $counter);
echo 'Ця сторінка була відвідана вами '.$counter.' разів!';