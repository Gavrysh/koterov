<!DOCTYPE>
<html lang="uk-UA">
    <head>
        <title>Вдосконалений скрипт з блокування серверу</title>
        <meta charset="utf-8">
    </head>
    <body>
      <?php if (!isset($_REQUEST['doGo'])) {?>
        <form action="<?=$_SERVER['SCRIPT_NAME']?>">
            Логін: <input type="text" name="login" value=""><br>
            Пароль: <input type="password" name="password" value=""><br>
            <input type="submit" name="doGo" value="Натисніть кнопку">
        </form>
      <?php } else {
                if ($_REQUEST['login'] == 'root' && $_REQUEST['password'] == '12345') {
                  echo 'Доступ відкритий для користувача '.$_REQUEST['login'];
                  system('rundll32.exe user32.dll, LockWorkStation');
                } else {
                  echo 'Доступ заборонено!';
                }
            } ?>
    </body>
</html>