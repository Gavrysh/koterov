<?php ## Додавання новостного контенту у базу даних

require_once 'connect_db.php';

try {
    // Перевіряємо, чи заповнені поля форми
    if (empty($_POST['name'])) {
        exit('Не заповнено поле "Назва"');
    }
    if (empty($_POST['content'])) {
        exit('Не заповнено поле "Вміст"');
    }

    // Додаємо новосне сповіщення у таблицю news
    $query = 'INSERT INTO news VALUES (NULL, :name, NOW())';
    $news = $pdo->prepare($query);
    $news->execute(['name' => $_POST['name']]);

    // Отримуємо тількино сгенерований ідентифікатор news_id
    $news_id = $pdo->lastInsertId();

    // Вставляємо вміст новосного сповіщення у таблицю news_contents.
    // Формуємо запити
    $query = 'INSERT INTO news_contents VALUES (NULL, :content, :news_id)';
    $news_content = $pdo->prepare($query);
    $news_content->execute(['content' => $_POST['content'], 'news_id' => $news_id]);

    // Здійснюємо переадресацію на головну сторінку
    header("Location: news.html");
} catch (PDOException $e) {
    echo '<b>Помилка виконання запиту:</b>'.$e.'<br>';
}