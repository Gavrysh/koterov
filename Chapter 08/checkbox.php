<!DOCTYPE html>
<html lang="uk-UA">
    <head>
        <title>Гарантоване отримання значень від прапоців</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
          if (isset($_REQUEST['doGo'])){
            foreach ($_REQUEST['known'] as $k => $v) {
              if ($v) {
                echo 'Ви знаєтесь у '.$k.'!<br>';
              } else {
                echo 'Ви не знаєтесь у '.$k.'!<br>';
              }
            }
          }
          else { ?>
        <form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="post">
            Які мови програмування ви знаєте?<br>
            <input type="hidden" name="known[PHP]" value="0">
            <input type="checkbox" name="known[PHP]" value="1">
            
            <input type="hidden" name="known[Perl]" value="0">
            <input type="checkbox" name="known[Perl]" value="1">
            
            <input type="submit" name="doGo" value="Go!">
        </form>
          <?php } ?>
    </body>
</html>