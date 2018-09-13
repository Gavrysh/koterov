<?php ## Перебирання властивостей за допомогою методу foreach()

try {
    $dir = opendir('phar://curr_dir.phar');
    while (($file = readdir($dir)) !== false) {
        echo "{$file}<br>";
    }
    closedir($dir);
} catch (Exception $e) {
    echo '<b>Помилка відкриття phar-архіву:</b> '.$e->getMessage();
}