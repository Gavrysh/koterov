<?php ##Ігнорування карманів
$str = '2018-06-29';
$re = '#^(?:\d{4})-(?:\d{2})-(\d{2})$#';
preg_match($re, $str, $matches) or die('Відповідність не знайдена!');
echo 'День: '.htmlspecialchars($matches[1]);