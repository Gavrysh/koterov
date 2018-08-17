<?php ## Приклад неявного використання ітератору у foreach()

require_once __DIR__.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'FS.php';

// Для прикладу відкриваємо каталог де багато зображень
$d = new FSDirectory('.');

foreach ($d as $path => $entry) {
    if ($entry instanceof FSFile) {
        // Якщо це файл, а не підкаталог...
        echo '<tt>'.$path.'</tt>: '.$entry->getSize().'<br>';
    }
}