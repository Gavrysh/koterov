<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 8:12
 */
require_once './File/Logger0.php';

for ($n = 0; $n <= 10; ++$n) {
    $logger = new Logger0('test'.$n, 'test.log');
    $logger->log('Hello, World!');
}