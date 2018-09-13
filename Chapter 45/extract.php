<?php ## Витяг вмісту PHAR-архіву

try {
    $phar = new Phar('autopager.phar');
    $phar->extractTo('extract');
} catch (Exception $e) {
    echo '<b>Помилка, неможливо відкрити PHAR-архів: </b>'.$e->getMessage();
}