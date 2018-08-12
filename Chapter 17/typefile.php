<?php ##Визначення типу файлу
//Отримуємо права доступа та тип файлу
$perms = fileperms('text.txt');
echo $perms.'<br>';
//Визначаємо тип файлу
if (($perms & 0xC000) == 0xC000) {
    echo 'Сокет';
} elseif (($perms & 0xA000) == 0xA000) {
    echo 'Символічне посилання';
} elseif (($perms & 0x8000) == 0x8000) {
    echo 'Звичайний файл';
} elseif (($perms & 0x6000) == 0x6000) {
    echo 'Спеційний блочний файл';
} elseif (($perms & 0x4000) == 0x4000) {
    echo 'Каталог';
} elseif (($perms & 0x2000) == 0x2000) {
    echo 'Спеційний символьний файл';
} elseif (($perms & 0x1000) == 0x1000) {
    echo 'FIFO-канал';
} else {
    echo 'Невизначений файл';
}