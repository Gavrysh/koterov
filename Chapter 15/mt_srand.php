<?php ##Послідовність випадкових чисел
mt_srand(123);
for ($i = 0; $i <= 5; ++$i) {
    echo mt_rand().' ';
}
echo '<br>';
mt_srand(123);
for ($i = 0; $i <= 5; ++$i) {
    echo mt_rand().' ';
}