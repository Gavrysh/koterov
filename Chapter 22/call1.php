<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 7:17
 */
require_once './Math/Complex1.php';

$a = new Complex1;
$a->im = 314;
$a->re = 101;

$b = new Complex1;
$b->im = 303;
$b->re = 6;

$a->add($b);

echo $a->__toString();