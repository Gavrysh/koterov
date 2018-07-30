<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 7:46
 */
require_once './Math/Complex2.php';

$obj = new Complex2(314, 101);
$obj->add(new Complex2(303, 6));
echo $obj;