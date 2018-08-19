<?php ## Неявне визивання методу

require_once 'lib/Complex2.php';

$addMethod = 'add';

$a = new Complex2(101, 303);
$b = new Complex2(0, 6);

// Викликаємо метод add() у неявний спосіб
call_user_func([$a, $addMethod], $b);
echo $a;