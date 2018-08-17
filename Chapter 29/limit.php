<?php ## Використання класу LimitIterator

require_once 'lib/ExtensionFilter.php';

$limit = new LimitIterator(new ExtensionFilter(new DirectoryIterator('.'), 'php'), 0, 7);

foreach ($limit as $file) {
    echo $file.'<br>';
}