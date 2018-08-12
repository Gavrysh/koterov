<?php
//Перетворюємо JSON-дані із масиву
$arr = json_decode($_POST['json'], true);
//Об'єднуємо вміст у строку
$name = trim(implode(" ", $arr));

$result = 'Вітаю';
if (!empty($name)) {
    $result .= ', '.$name;
}
$result .= '!';

//Віддаємо результат
echo htmlspecialchars($result);