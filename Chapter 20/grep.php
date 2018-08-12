<?php ##Використання preg_grep()
foreach (preg_grep('#^ex\d#s', glob("*")) as $fn) {
    echo 'Файл прикладу: '.$fn.'<br>';
}
