<?php ##Читання INI-файлу
$ini = parse_ini_file('php.ini', true);
echo '<pre>';
print_r($ini);
echo '</pre>';
