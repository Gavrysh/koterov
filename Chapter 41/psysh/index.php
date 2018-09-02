<?php ## Інтерактивний відладчик

require_once __DIR__.'/vendor/autoload.php';

// Тепер можна використовувати компонент monolog
$log = new Monolog\Logger('name');
$handler = new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING);
$log->pushHandler($handler);

// Визиваємо інтерактивний відладчик
eval(\Psy\sh());

$log->addWarning('Попередження');