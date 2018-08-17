<?php ## Виведення, за виключенням php файлів

require_once 'lib/ExtensionFilter.php';

$filter = new ExtensionFilter(new DirectoryIterator('.'), 'php');

foreach ($filter as $item) {
    echo $item.'<br>';
}