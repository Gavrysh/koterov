<!DOCTYPE html>
<html lang="uk-UA">
  <head>
    <title>Виведення параметрів командної строки</title>
    <meta charset="utf-8">
  </head>
  <body>
  <?php
    echo 'Дані командної строки: '.$_SERVER['QUERY_STRING'];
  ?>
  </body>      
</html>