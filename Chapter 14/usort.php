<?php ##Користувацьке сортування списків
$tools = [
  'One',
  'Two',
  'Three',
  'Four'
];
usort($tools, function ($a, $b)
{
    return strcmp($a, $b);
});
echo '<pre>';
print_r($tools);
echo '</pre>';