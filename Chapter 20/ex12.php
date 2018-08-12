<?php ##Використання PREG_OFFSET_CAPTURE
$st = '<b>Жирний текст</b>';
$re = '#<(\w+).*?>(.*?)</\1>#s';
preg_match($re, $st, $p, PREG_OFFSET_CAPTURE);
echo '<pre>';
print_r($p);
echo '</b>';