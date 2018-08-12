<?php ##Використовування функції json_encode() та json_decode()
$arr = [
  'employee' => 'Тягнибородько Микола',
  'phone'    => [
    '066-467-78-93',
    '095-143-56-77'
  ]
];

$encode = json_encode($arr, JSON_UNESCAPED_UNICODE);
echo $encode.'<br>';

$arr = json_decode($encode, true);
echo '<pre>';
print_r($arr);
echo '</pre>';