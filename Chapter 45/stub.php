<?php ## Створення PHAR-архіву із заглушкою

try {
    $phar = new Phar('./autopager.phar', 0, 'autopager');

    // Для запису директив phar.readonly конфігураційного файлу php.ini повинна бути встановлена в 0 або Off
    if ($phar::canWrite()) {

        // Буферізація запису, нічого не записується доти, поки не буде визваний метод stopBuffering()
        $phar->startBuffering();

        // Додавання усіх файлів із компоненту GSPager
        $phar->buildFromIterator(
            new DirectoryIterator(realpath('./vendor/gases/pager/src/GSPager')),
            './vendor/gases/pager/src');

        // Додаємо автозавантажувач у архив
        $phar->addFromString('autoloader.php', file_get_contents('autoloader.php'));

        // Призначаємо автозавантажувач у якості файла-заглушки
        $phar->setDefaultStub('autoloader.php', 'autoloader.php');

        // Збереження результатів на жорсткий диск
        $phar->stopBuffering();
    } else {
        echo 'PHAR-архив не може бути записаний';
    }
} catch (Exception $e) {
    echo '<b>Помилка!</b> '.$e->getMessage();
}