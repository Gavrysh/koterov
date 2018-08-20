<?php ## Ручний розбір QUERY_STRING

$str = 'salivan=paul&name[mm]=kate&name[kk]=boba';
parse_str($str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
