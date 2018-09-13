<?php ## Клас Phar реалізує інтерфейс ArrayAccess

try {
    $phar = new Phar('./phpinfo.phar', 0, 'phpinfo.phar');

    // Для запису директив phar.readonly конфігураційного файлу php.ini повинна бути встановлена в 0 або Off
    if ($phar::canWrite()) {

        // Буферізація запису, нічого не записується доти, поки не буде визваний метод stopBuffering()
        $phar->startBuffering();

        // Формуємо файл phpinfo.php
        $phar['phpinfo.php'] = '<?php phpinfo();';

        // Збереження результатів на жорсткий диск
        $phar->stopBuffering();
    } else {
        echo 'PHAR-архив не може бути записаний';
    }
} catch (Exception $e) {
    echo '<b>Помилка!</b> '.$e->getMessage();
}