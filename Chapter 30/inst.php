<?php ## Створення об'єкту невідомого класу

require_once 'lib/Complex2.php';

// Припустимо що ім'я класу зберігається у змінній $className
$className = 'Complex2';

//Створюємо новий об'єкт
$obj = new $className(1, 102);
echo 'Створений обєкт: '.$obj.'<br>';
