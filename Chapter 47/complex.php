<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <title>PHP автоматично створює змінні при завантаженні</title>
    <meta charset="utf-8">
</head>
<body>
    <?php ## PHP оброблює і складні імена після завантаження
        if (@$_REQUEST['doUpload']) {
            echo '<pre>Вміст $_FILES:'.print_r($_FILES, true).'</pre><hr>';
        }
    ?>
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" enctype="multipart/form-data">
        <h3>Оберіть тип файлів у вашій системі</h3>
        <label>Текстовий файл<br><input type="file" name="input[a][text]"></label><br>
        <label>Бінарний файл<br><input type="file" name="input[a][bin]"></label><br>
        <input type="submit" name="doUpload" value="Завантажити">
    </form>
</body>
</html>