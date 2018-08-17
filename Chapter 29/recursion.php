<?php ## Рекурсивний обхід каталогу за допомогою ітератору

$dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.'), true);

foreach ($dir as $file) {
    echo str_repeat('-', $dir->getDepth()).$file.'<br>';
}