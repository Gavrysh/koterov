<?php ##Перетворення e-mail адрес на HTML-посилання
$text = 'Доброго часу доби від very.nice@ukr.net та від veri.nice@i.ua';
echo preg_replace('#(\S)+@([a-z0-9.])+#is', '<a href="mailto:$0">$0</a>', $text);