<?php ## Модифікація частини URL без зміни інших її ділянок

require_once 'lib/http_build_url.php';

// URL з яким будемо працювати
$url = 'http://user@example.com:80/path?arg=value#anchor';
// Та інші приклади, які можна спробувати
// $url = '/path?arg=value#anchor';
// $url = 'thematrix.com';
// $url = 'http://thematrix.com/#top'; # без '/' перед '#' не працює!

// Розбираємо URL на частини
$parsed = parse_url($url);

// Розбираємо одну із частинб QUERY_STRING, на елементи масиву
parse_str(@$parsed['query'], $query);

// Додаємо новий елемент у масив QUERY_STRING
$query['names'] = 'G@SeS';

// Збираємо QUERY_STRING назад з масиву
$parsed['query'] = http_build_query($query);

// Створюємо фінальний URL
$newurl = http_build_url($parsed);

// Виводимо результати роботи
echo 'Старий URL: '.$url.'<br>';
echo 'Новий URL: '.$newurl.'<br>';