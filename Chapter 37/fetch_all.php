<?php ## Використання методу fetch_all()
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'connect_db.php';

try {
    $query = 'SELECT * FROM catalogs';
    $cat = $pdo->query($query);

    $catalogs = $cat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($catalogs as $catalog) {
        echo $catalog['name'].'<br>';
    }
} catch (PDOException $e) {
    echo '<b>Error:</b> '.$e->getMessage().'<br>';
}