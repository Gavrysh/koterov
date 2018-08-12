<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <title>Використання htmlspecialchars()</title>
    <meta charset="utf-8">
</head>
<body>
<?php
    $example = <<<EXAMPLE
    <?php
      echo "Hello, World!";
    ?>
EXAMPLE;
    echo htmlspecialchars($example);
?>
</body>
</html>