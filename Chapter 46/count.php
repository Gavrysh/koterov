<?php ## Кількість елементів у колекції

$content = file_get_contents('rss.xml');
$rss = new SimpleXMLElement($content);

echo $rss->channel->item->count();
