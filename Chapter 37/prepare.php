<?php ## Параметризований запит

require_once 'connect_db.php';

try {
    $query = 'SELECT * 
              FROM catalogs 
              WHERE catalog_id = :catalog_id';
    $cat = $pdo->prepare($query);
    $cat->execute(['catalog_id' => 1]);
    echo $cat->fetch()['name'];
} catch (PDOException $e) {
    echo '<b>Error:</b>'.$e->getMessage().'<br>';
}