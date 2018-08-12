<!DOCTYPE html>
<html lang="uk-UA">
    <head>
        <title>Передача JSON-даних</title>
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="/json_index.js"></script>
    </head>
    <body>
        <p id="js-hello">Вітаємо</p>
        <form action="/json_answer.php" method="GET">
            <p>Ім'я: <input type="text" name="name" value=""></p>
            <p>Прізвище: <input type="text" name="family" value=""</p>
            <p><input type="submit" value="Представитися"</p>
        </form>
    </body>
</html>