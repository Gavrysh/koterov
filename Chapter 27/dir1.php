<?php ## Альтернативньій способ чтения содержимого каталога
//Открьіваем каталог
$cat = dir('.');

//Читаем содержимое каталога
while (($file = readdir($cat->handle)) !== false) {
    echo $file.'<br>';
}

//Закрьіваем каталог
closedir($cat->handle);