<?php ##Різноманітні флаги preg_match_all()
 header("Content-type: text/plain");
 $flags = [
   'PREG_PATTERN_ORDER',
   'PREG_SET_ORDER',
   'PREG_SET_ORDER|PREG_OFFSET_CAPTURE'
 ];
$re = '#<(\w+).*?>(.*?)</\1>#s';
$text = '<b>text</b> and <i>other text</i>';
echo "Рядок: $text\n";
echo "Вираз: $re\n";
foreach ($flags as $name) {
    preg_match_all($re, $text, $matches, eval("return $name;"));
    echo "Flag: $name:\n";
    print_r($matches);
    echo "\n";
}