<?php ## Использование метода rewind()

//Открьіваем текущий каталог
$dirname = './';
$cat = dir($dirname);

//Устанавливаем счетчики файлов и подкаталогов в нулевое значение
$fileCount = 0;
$dirCount = 0;

//Подсчитьіваем количество файлов и каталогов
while (($file = $cat->read()) !== false) {
    is_file($dirname.$file) ? ++$fileCount : ++$dirCount;
}

//Не учитьіваем служебньіе подкаталоги '.' и '..'
$dirCount = $dirCount - 2;

//Вьіводим информацию о количестве файлов и подкаталогов
echo 'Подкаталогов: '.$dirCount.' шт.<br>';
echo 'Файлов: '.$fileCount.' шт.<br>';

//Устанавливаем указатель каталога в начало
$cat->rewind();

//Читаем содержимое каталога и вьіводим на екран
while (($file = $cat->read()) !== false) {
    if (!($file == '.' || $file == '..')) {
        echo $file.'<br>';
    }
}

//Закрьіваем каталог
$cat->close();