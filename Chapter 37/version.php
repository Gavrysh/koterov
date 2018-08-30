<?php ## Виймання поточної версії

require_once 'connect_db.php';

// Виконуємо запит
$query = 'SELECT VERSION() AS version';
$ver = $pdo->query($query);

// Виймаємо результат
$version = $ver->fetch();
echo $version['version'].'<br>'; // 5.7.23-0ubuntu0.18.04.1