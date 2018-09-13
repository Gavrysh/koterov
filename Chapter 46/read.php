<?php ## Читання XML-файлу

$content = file_get_contents('rss.xml');
$rss = new SimpleXMLElement($content);

echo $rss->channel->title.'<br>';
echo $rss->channel->description.'<br>';
