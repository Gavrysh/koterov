<?php ##Підраховування кількості символів у строці
$str = 'Привіт, Мир!';
echo 'У строці &quot;'.$str.'&quot; '.strlen($str).' байт<br>';
echo 'У строці &quot;'.$str.'&quot; '.mb_strlen($str).' символів<br>';
$arr = [1, 2, 3];
echo $arr;