<?php ## Приклад роботи з сесіями
session_start();

// Якщо на сайт тільки зайшли - онулюємо лічильник
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
++$_SESSION['count'];
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