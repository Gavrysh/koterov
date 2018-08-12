<!DOCTYPE html>
<html lang="uk-UA">
<head>
  <title>Проблеми з обробкою UTF-8 у PHP</title>
  <meta charset="utf-8">
</head>
<body>
<?php
    $str = 'Hello? World!';
    echo $str[2].'<br>';
    $str = 'Привіт, Мир!';
    echo $str[2].'<br>';
?>
</body>
</html>