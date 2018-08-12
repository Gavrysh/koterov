<?php ##Приклад перший
//Перевірити наявність цифр у рядку (одна або більше)
preg_match('#\d+#s', 'article_123.html', $matches);
echo '<pre>';
print_r($matches);
echo '</pre>';