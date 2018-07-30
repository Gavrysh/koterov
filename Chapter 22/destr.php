<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 8:29
 */
require_once './File/Logger.php';

for ($n = 0; $n <= 10; ++$n) {
    $logger = new Logger('test'.$n, 'test.log');
    $logger->log('Hello, World!');
}

exit();