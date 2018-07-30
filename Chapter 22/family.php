<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 10:36
 */
require_once './Others/Father.php';
require_once './Others/Child.php';

$father = new Father;

$child = new Child($father);

$father->children[] = $child;

echo 'So far, all are alive ... We kill everyone.<br>';

$father = $child = null;

echo 'All died, the end of the program.';
