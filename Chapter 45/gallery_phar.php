<?php ## Створення PHAR-архіву
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $phar = new Phar('./gallery.phar', 0, 'gallery.phar');

    // Для запису директив phar.readonly конфігураційного файлу php.ini повинна бути встановлена в 0 або Off
    if ($phar::canWrite()) {

        // Буферізація запису, нічого не записується доти, поки не буде визваний метод stopBuffering()
        $phar->startBuffering();

        // Додавання усіх файлів з папки photos
        foreach (glob('./vendor/gases/pager/photos/*') as $jpg) {
            $phar[basename($jpg)] = file_get_contents($jpg);
        }

        // Призначаємо файл-заглушку
        $phar['show.php'] = file_get_contents('show.php');
        $phar->setDefaultStub('show.php', 'show.php');

        // Збереження результатів на диск
        $phar->stopBuffering();
    } else {
        echo 'PHAR-архив не може бути записаний';
    }
} catch (Exception $e) {
    echo '<b>Помилка!</b> '.$e->getMessage();
}
