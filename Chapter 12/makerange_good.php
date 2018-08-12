<?php ##Економне використання пам'яті
function crange($size)
{
    for ($i = 0; $i <= $size; ++$i) {
        yield $i;
    }
}
$range = crange(1024000);
foreach ($range as $val) {
    echo $val.' ';
}
echo '<br>Memory usage: '.memory_get_usage();