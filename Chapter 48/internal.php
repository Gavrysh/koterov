<?php ## Внутрішній редірект

// Спочатку форсуємо внутрішній редірект
header('Status: 200 Ok');

// Отримуємо URI каталог поточного скрипта
$dir = dirname($_SERVER['SCRIPT_NAME']);

if ($dir == DIRECTORY_SEPARATOR) {
    $dir = '';
}

// Здійснюємо переадресацію по абсолютному (!) URI
header("Location: $dir/result.php");
exit();