<!DOCTYPE html>
<html>
    <head lang="uk-UA">
        <meta charset="UTF-8">
        <title>Використовування даних з форми</title>
    </head>
    <body>
        <?php
          if ($_REQUEST['login'] == 'root' && $_REQUEST['password'] == '12345') {
            echo 'Доступ відкритий для користувача '.$_REQUEST['login'];
            system('rundll32.exe user32.dll, LockWorkStation');
          } else {
            echo 'Доступ заборонено!';
          }
        ?>
    </body>
</html>
