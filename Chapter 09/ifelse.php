<!DOCTYPE html>
<html lang="uk-UA">
    <head>
        <title>Альтернативний синтаксис if-else</title>
        <meta charset="utf-8">
    </head>
    <body>
      <?php if (isset($_REQUEST['doGo'])):?>
        Привіт, <?=$_REQUEST['name'];?>! Як справи?
      <?php else:?>
        <form action="<?=$_SERVER['REQUEST_URI']?>" method="post">
            Ваше ім'я: <input type="text" name="name"><br>
            <input type="submit" name="doGo" value="Відіслати!">
        </form>
      <?php endif;?>
    </body>
</html>