<?php ##Функція для виводу змісту змінної
//Роздруковує дамп змінної на екран
function dumper($obj)
{
    echo '<pre>'.htmlspecialchars(dumperGet($obj)).'</pre>';
}

//Повертає строку - дамп значення змінної у деревоподібному вигляді (якщо це масив або об'єкт)
//У змінній $leftSp зберігається строка із пробілами, яка буде виводитись ліворуч від тексту
function dumperGet(&$obj, $leftSp = '')
{
    if (is_array($obj)) {
        $type = 'Array['.count($obj).']';
    } elseif (is_object($obj)) {
        $type = 'Object';
    } elseif (gettype($obj) == 'boolean') {
        return $obj ? 'true' : 'false';
    } else {
        return "\"$obj\"";
    }
    $buf = $type;
    $leftSp .= ' ';
    for (reset($obj); list($k, $v) = each($obj);) {
        if ($k == 'GLOBALS') {
            continue;
        }
        $buf .= "\n$leftSp$k => ".dumperGet($v, $leftSp);
    }
    return $buf;
}