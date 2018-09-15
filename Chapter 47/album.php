<?php ## Простійший фотоальбом з можливістю завантаження

$imgDir = 'img'; // Каталог для збереження зображень
@mkdir('img', 0777); // Якщо не існує - створюємо

// Перевіряємо, чи натиснута кнопка завантаження
if (@$_REQUEST['doUpload']) {
    $data = $_FILES['file'];
    $tmp = $data['tmp_name'];

    // Перевіряємо, чи прийнятий файл
    if (is_uploaded_file($tmp)) {
        $info = @getimagesize($tmp);

        // Перевіряємо, чи є файл зображенням
        if (preg_match('#image/(.*)#is', $info['mime'], $match)) {

            // Ім'я - поточний час у секундах, а розширення, як частина MIME-типу після "image/"
            $name = "$imgDir/".time().".".$match[1];

            // Додаємо файл у каталог із фотографіями
            move_uploaded_file($tmp, $name);
        } else {
            echo '<h2>Спроба додати файл недопустимого формату!</h2>';
        }
    } else {
        echo "<h2>Помилка завантаження: #{$data['error']}</h2>";
    }
}

// Тепер зчитуємо у масив наш фотоальбом
$photos = [];
foreach (glob("$imgDir/*") as $path) {
    $size = getimagesize($path); // розмір
    $time = filemtime($path);

    // Вставляємо зображення у масив $photos
    $photos[$time] = [
        'time' => $time,           // час додавання
        'name' => basename($path), // ім'я файлу
        'uri'  => $path,           // його URI
        'w'    => $size[0],        // ширина зображення
        'h'    => $size[1],        // її висота
        'wh'   => $size[3]         // width=xxx height=yyy
    ];
}

// Ключи масиву $photos - час у секундах, коли була додана та чи інша фотографія
// Сортуємо масив: більш "свіжі" фотографії розташовуємо ближче до його початку
ksort($photos);

// Дані до виводу готові. Справа за малим - оформити сторінку.
?>

<!DOCTIPE html>
<html lang="uk-UA">
<header>
    <title>Простіший фотоальбом з можливістю завантаження</title>
    <meta charset="utf-8">
</header>
<body>
    <form action="<?=$_SERVER['SCRIPT_NAME'] ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit" name="doUpload" value="Завантажити нову фотографію"><hr>
    </form>
    <?php foreach ($photos as $key => $value) : ?>
        <p><img src="<?= $value['uri'] ?>" <?=$value['wh'] ?> alt="Додана <?= date('d.m.Y H:i:s', $value['time']) ?>"></p>
    <?php endforeach; ?>
</body>
</html>
