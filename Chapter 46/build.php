<?php ## Формування XML-файлу

$content = '<?xml version="1.0" encoding="UTF-8"?><rss version="2.0"></rss>';
$xml = new SimpleXMLElement($content);

$rss = $xml->addChild('channel');
$rss->addChild('title', 'PHP');
$rss->addChild('link', 'http://exmaple.com/');
$rss->addChild('description', 'Портал, присвячений PHP');
$rss->addChild('language', 'ua');
$rss->addChild('pubDate', date('r'));

// Встановлення з'єднання з БД
require_once './Chapter 37/connect_db.php';

try {
    $query = '
      SELECT * FROM news
      ORDER BY putdate DESC
      LIMIT 20';
    $itm = $pdo->query($query);

    while ($news = $itm->fetch()) {
        $item = $rss->addChild('item');
        $item->addChild('title', $news['name']);
        $item->addChild('description', $news['content']);
        $item->addChild('link', "http://example.com/news/{$news['id']}");
        $item->addChild('guid', "news/{$news['id']}");
        $item->addChild('pubDate', date('r', strtotime($news['putdate'])));
        if (!empty($news['media'])) {
            $enclosure = $item->addChild('enclosure');
            $url = "http://example.com/images/{$news['id']}/{$news['media']}";
            $enclosure->addAttribute('url', $url);
            $enclosure->addAttribute('type', 'image/jpeg');
        }
    }
} catch (PDOException $e) {
    echo '<b>Помилка виконання запиту! </b>'.$e->getMessage();
}

$xml->asXML('build.xml');
