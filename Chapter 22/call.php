<?php
require_once './Math/Complex.php';

$obj = new Complex;

$obj->re = 16.7;
$obj->im = 101;

$obj->add(18.09, 303);

echo $obj->re.' '.$obj->im;