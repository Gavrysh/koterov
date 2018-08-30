<?php ## Помилковий запит

require_once 'connect_db.php';
$query = 'SELECT VERSION1() as version';

try {
    $ver = $pdo->query($query);
    echo $ver->fetch()['version'];
} catch (PDOException $e) {
    echo '<b>Помилка:</b>'.$e->getMessage().'<br>';
}