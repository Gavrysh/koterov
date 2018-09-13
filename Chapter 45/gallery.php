<?php ## Використання foreach для доступу до вмісту архива
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $phar = new Phar('./gallery.phar', 0, 'gallery.phar');
    foreach ($phar as $file) {
        // Витягаємо MIME-тип зображення
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $file);
        finfo_close($finfo);
echo $file.'<br>';
        if ($mime == 'image/jpeg') {
            echo "<img src='./gallery_use.php?image={$file}'><br>";
        }
    }
} catch (Exception $e) {
    echo '<b>Відкрити PHAR-архів не вдалося. </b>'.$e->getMessage();
}