<?php

$i = 0;
begin:
$i++;
echo $i.'<br>';
if ($i >= 100) {
    goto finish;
}
goto begin;
finish: