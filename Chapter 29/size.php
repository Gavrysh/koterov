<?php ## Використання методів класу DirectoryIterator

$dir = new DirectoryIterator('.');

foreach ($dir as $file) {
    if ($file->isFile()) {
        echo $file.' - size: '.$file->getSize().'<br>';
    }
}