<?php ## Використання функції htmlimgmail()
require_once 'lib/attach.php';

// Відправляємо поштове сповіщення
$picture[0] = 's_2018082401.jpg';
$picture[1] = 's_2018082402.jpg';
$mail_to = 'very.nice@ukr.net';
$thm = 'Тема сповіщення';
$html = "<!DOCTYPE html>
<html lang='uk-UA'>
<head>
    <title>Поштова розсилка</title>
</head>
<body>
    <img src='cid:".md5($picture[0])."' border='0'>Тіло сповіщення<br><br>
    <img src='cid:".md5($picture[1])."' border='0'>
</body>
</html>";
if (htmlimgmail($mail_to, $thm, $html, $picture)) {
    echo 'Успіх! '.date('d-m-Y H:s');
} else {
    echo 'Не відправлено';
}