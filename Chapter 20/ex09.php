<?php ## "Жадні" квантифікатори
$str = 'Hello, this <b>word</b> is <b>bold</b>!';
$re = '#<(\w+) [^>]* > (.*) </\1>#xs';
preg_match($re, $str, $matches) or die('Теги відсутні!');
echo $str.'<br>';
echo htmlspecialchars($matches[2].' обрамлено тегом '.$matches[1]);