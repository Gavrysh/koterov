<?php ## Перевизначення оброблювачив сесії

// Повертає повне ім'я тимчасового сховища сесії.
// У випадку, якщо потрібно змінити той каталог, у якому потрібні зберігатися сесії,
// достатньо змінити тільки цю функцію
function ses_fname($key)
{
    return dirname(__FILE__)."/sessiondata/".session_name()."/$key";
}

// Функції-заглушки - нічого не виконують
function ses_open()
{
    return true;
}

function ses_close()
{
    return true;
}

// Читання даних з тимчасового сховища
function ses_read($key)
{
    // Отримуємо ім'я файлу та відкриваємо файл
    $fname = ses_fname($key);
    return @file_get_contents($fname);
}

// Запис даних сесії у тимчасове сховище
function ses_wrute($key, $val)
{
    $fname = ses_fname($key);

    // Спочатку створюємо усі каталоги (у випадку, якщо вони вже існують - ігноруємо сповіщення про помилку
    @mkdir(dirname(dirname($fname)), 0777);
    @mkdir(dirname($fname), 0777);

    // Створюємо файл та записуємо у нього дані сесії
    @file_put_contents($fname, $val);
    return true;
}

// Визивається при знищенні сесії
function ses_destroy($key)
{
    return @unlink(ses_fname($key));
}

// Збирання сміття - шукаємі усі старі файли та видаляємо їх
function ses_gc($maxLifeTime) {
    $dir = ses_fname('.');

    // Отримуємо доступ до каталогу поточної групи сесій
    foreach (glob("$dir/*") as $fname) {
        // Файл занадто старий?
        if (time() - filemtime($fname) >= $maxLifeTime) {
            @unlink($fname);
            continue;
        }
    }

    // Якщо каталог не пустий, він не видалиться - буде попередження. Ми його придушуємо.
    // Якщо пустий - видалиться, що нам і потрібно
    @rmdir($dir);
    return true;
}

// Реєструємо наші нові обробники
session_set_save_handler('ses_open', 'ses_close', 'ses_read', 'ses_write', 'ses_destroy', 'se_gc');

// Для прикладу - під'єднуємось до групи сесій test
session_name(test);
session_start();

// Збільшуємо лічильник сесії
@++$_SESSION['count'];
?>

<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <title>Лічильник (робота з сессіями)</title>
    <meta charset="utf-8">
</head>
<body>
<h2>Лічильник</h2>
<p>
    Ви відвідали поточну сторінку <?= $_SESSION['count'] ?> рази!
</p>
<p>
    Щоб оновити лічильник, потрібно закрити поточну сторінку, або перейти за посиланням <a href="<?= $_SERVER['SCRIPT_NAME'] ?>" target="_blank">Відкрити дочірнє вікно</a>
</p>
</body>
</html>
