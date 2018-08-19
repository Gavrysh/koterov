<?php ## Створення об'єкту невідомого класу (reflection API)

require_once 'lib/Complex2.php';

// Нехай ім'я класу зберігається у змінній $className
$className = 'Complex2';

// ... а параметри його конструктору - у $args
$args = [1, 2];

// Створюємо об'єкт, зберігаючий всю інформацію про клас.
// Фактично, ReflectionClass є "класом, який зберігає відомості про інший клас"
$class = new ReflectionClass($className);

// Створимо об'єкт класу у явний спосіб
$obj = $class->newInstance(101, 103);
echo 'Перший обєкт: '.$obj.'<br>';

// Але залишився невикористанним $args, та параметри вказали у явний спосіб.
// Тепер створимо обєкт класу НЕЯВНО
$obj = call_user_func_array([$class, 'newInstance'], $args);
echo 'Другий обєкт: '.$obj.'<br>';