<?php ##Видалення HTML-тегів зі строки
$st = <<<HTML
  <b>Жирний текст</b>
  <tt>Моноширинний текст</tt>
  <a href='http://kot.local'>Посилання</a>
  a<x && y>d
HTML;
echo 'Початковий текст: '.$st.'<br>';
echo 'Після видалення HTML-тегів: '.strip_tags($st, '<tt><b>');