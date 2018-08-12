<!DOCTYPE>
<html lang="uk-UA">
    <head>
        <title>Виведення IP-адреси та назви браузеру користувача</title>
        <meta charset="utf-8">
    </head>
    <body>
        Ваша IP-адреса: <?=$_SERVER['REMOTE_ADDR'];?><br>
        Ваш браузер: <?=$_SERVER['HTTP_USER_AGENT'];?><br>
    </body>
</html>
