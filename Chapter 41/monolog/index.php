<?php ## Підключення автозавантажувача

require_once __DIR__.'/vendor/autoload.php';

// Тепер можна використовувати компонент monolog
$log = new Monolog\Logger('name');
$handler = new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING);
$log->pushHandler($handler);
$log->addWarning('Попередження');