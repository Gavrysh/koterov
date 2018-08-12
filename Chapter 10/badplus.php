<?php

$names = ['pp', 'aa', 'kk'];
$bad = ['ff', 'gg'];
$lim = ['ll'];

$all = $lim + $bad + $names;

echo '<pre>';
echo print_r($all);
echo '</pre>';
