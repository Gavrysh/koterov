<?php ## Створення PHAR-архіву
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $phar = new Phar('./curr_dir.phar', 0, 'curr_dir.phar');

    // Для запису директив phar.readonly конфігураційного файлу php.ini повинна бути встановлена в 0 або Off
    if ($phar::canWrite()) {

        // Буферізація запису, нічого не записується доти, поки не буде визваний метод stopBuffering()
        $phar->startBuffering();

        // Додавання усіх файлів з компоненту GSPager
        $phar->buildFromIterator(
            new DirectoryIterator(realpath('.')),
            './');

        // Збереження результатів на жорсткий диск
        $phar->stopBuffering();
    } else {
        echo 'PHAR-архив не може бути записаний';
    }
} catch (Exception $e) {
    echo '<b>Помилка!</b> '.$e->getMessage();
}