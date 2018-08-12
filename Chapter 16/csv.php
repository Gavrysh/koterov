<?php ##Читання CSV-файлу
$f = fopen('file.csv', 'rt') or die('Помилка відкриття файлу!');
for ($i = 0; $data = fgetcsv($f, 1000, ';'); ++$i) {
    $num = count($data);
    echo '<h3>Строка номер '.$i.' полів: '.$num.'</h3>';
    for ($j = 0; $j <= $num; ++$j) {
        print '['.$j.']: '.$data[$j].'<br>';
    }
}
fclose($f);