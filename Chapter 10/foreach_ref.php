<?php
//Зміна значень масиву при переборі

$arr = [15, 20, 25, 30];

foreach ($arr as &$v) {
    $v++;
}
echo 'Елементи масиву:'.'<br>';
foreach ($arr as $k => $v) {
    echo '<br>'.$k.' => '.$v.' ';
    print_r($arr);
}

$st = 'Fill|Pupkin|12345|20-05-76|popochnik';
$person = explode('|', $st);
echo '<pre>';
print_r($person);
echo '</pre>';
list($name, $lastname, $id, $birthday, $status) = $person;

echo serialize(implode('&', $person)).'<br>';
echo serialize($person);