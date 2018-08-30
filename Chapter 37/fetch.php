<?php ## Виведення вмісту таблиці catalogs

require_once 'connect_db.php';

$query = 'SELECT * FROM catalogs';
$cat = $pdo->query($query);

try {
    while ($catalog = $cat->fetch(PDO::FETCH_ASSOC)) {
        echo $catalog['name'].'<br>';
    }
} catch (PDOException $e) {
    echo 'Помилка: '.$e->getMessage().'<br>';
}