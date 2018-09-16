<?php ## Відображення параметрів GZip-стиснення

// Функція лише встановлює значення cookie page_size_after
function obSaveCookieAfter($s)
{
    setcookie('page_size_after', strlen($s));
    return $s;
}

// Аналогічно, але для page_size_before
function obSaveCookieBefore($s)
{
    setcookie('page_size_before', strlen($s));
    return $s;
}

// Встановлюємо конвеєр обробників
ob_start('obSaveCookieAfter');
ob_start('gz_handler', 9);
ob_start('obSaveCookieBefore');

// Далі можна виводити любий текст - він буде стиснутий
?>
<!-- Виводимо інформацію про стискання (в окремому шаблоні) -->
<b><?php include 'gz.htm'; ?></b><hr>

<!-- Виводимо текст сторінки-->
<pre>
    <?php file_get_contents('Chapter 42_1/vendor/gases/pager/largetextfile.txt'); ?>
</pre>
