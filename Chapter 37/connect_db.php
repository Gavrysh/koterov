<?php ## З'єднання з базою даних
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $pdo = new PDO(
        'mysql:host=localhost; dbname=test',
        'gases',
        'bdoZY3',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ]);
} catch (PDOException $e) {
    echo '<b>Помилка: </b>'.$e->getMessage().'<br>';
}