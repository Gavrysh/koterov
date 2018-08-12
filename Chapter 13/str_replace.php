<?php ##Множинна заміна у строці
$from = [
  '{TITLE}',
  '{BODY}'
];
$to = [
  'Філософія',
  'Видається логічним, що сумнів представляє онтологічний сенс життя. Ставлення до сучасності - разюче.'
];
$template = <<<MARKER
<!DOCTYPE html>
<html lanng="uk-UA">
<head>  
  <title>{TITLE}</title>
  <meta charset="utf-8">
</head>
<body>{BODY}</body>
</html>
MARKER;
    echo str_replace($from, $to, $template);