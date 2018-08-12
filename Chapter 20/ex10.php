<?php ##Порівняння "жадібних" та "ледачих" квантифікаторів
$str = '[b]жирний текст [b]а тут ще жирніше[/b] повернулись[/b]';
$to = '<b>$1</b>';
$re1 = '#\[b\](.*)\[/b\]#ixs';
$re2 = '#\[b\](.*?)\[/b\]#ixs';

echo 'Жадібна версія:<br>'.htmlspecialchars(preg_replace($re1, $to, $str)).'<br><hr>';
echo 'Ледача версія:<br>'.htmlspecialchars(preg_replace($re2, $to, $str)).'<br>';