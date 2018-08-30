<?php ## Використання методу PDO::exec()
require_once 'connect_db.php';

// Формуємо та виконуємо запит
$query = "CREATE TABLE catalog (
          catalog_id INT(11) NOT NULL AUTO_INCREMENT,
          name TINYTEXT NOT NULL,
          PRIMARY KEY (catalog_id))";

$count = $pdo->exec($query);

if ($count !== false) {
    echo 'Таблиця створена вдало!';
} else {
    echo 'Не вдалося створити таблицю!';
    echo '<pre>';
    print_r($pdo->errorInfo());
    echo  '</pre>';
}