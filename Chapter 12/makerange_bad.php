<?php ##Неекономне витрачання пам'яті
function crange($size)
{
    $arr = [];
    for ($i = 0; $i <= $size; ++$i) {
        $arr[] = $i;
    }
    return $arr;
}
$range = crange(1024000);
foreach ($range as $val) {
    echo $val.' ';
}
//Визмачення кількості використаної пам'яті скриптом
echo '<br>Memory usage: '.memory_get_usage().'<br>';