<?php ##Час зміни файлу
$mtime = filemtime(__FILE__);
echo 'Остання зміна сторінки: '.date('Y-m-d H:i:s', $mtime);
