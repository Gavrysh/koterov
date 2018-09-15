<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <title>PHP Автоматично створює змінні при завантаженні</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    if (@$_REQUEST['doUpload']) {
        echo '<pre>Вміст $_FILES:'.print_r($_FILES, true).'</pre><hr>';
    }
    ?>
    Оберіть якій-небудь файл у формі, що розташована нижче
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="myFile">
        <input type="submit" name="doUpload" value="Завантажити">
    </form>
</body>
</html>
