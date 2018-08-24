<?php ## Обробник HTML-форми

if (empty($_POST['mail_to'])) {
    exit('Введіть адресу отримувача');
}

// Перевіряємо правильність заповнення за допомогою регулярного виразу
if (!preg_match('#^[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,6}$#i', $_POST['mail_to'])) {
    exit('Введіть адресу у вигляді somebody@ukr.net');
}

$_POST['mail_to'] = htmlspecialchars(stripslashes($_POST['mail_to']));
$_POST['mail_subject'] = htmlspecialchars(stripslashes($_POST['mail_subject']));
$_POST['mail_msg'] = htmlspecialchars(stripslashes($_POST['mail_msg']));

$picture = '';

// Якщо поле вибору вкладення не пусте, закачуємо його на сервер
if (!empty($_FILES['mail_file']['tmp_name'])) {

    // Завантажуємо файл
    $path = $_FILES['mail_file']['name'];
    if (copy($_FILES['mail_file']['name'], $path)) {
        $picture = $path;
    }
}

$thm = $_POST['mail_subject'];
$msg = $_POST['mail_msg'];
$mail_to = $_POST['mail_to'];

// Відправляємо почтове сповіщення
if (empty($picture)) {
    mail($mail_to, $thm, $msg);
} else {
    send_mail($mail_to, $thm, $msg, $picture);
}

// Допоміжна функція для відправки поштового сповіщення з вкладенням
function send_mail($to, $thm, $html, $path)
{
    $fp = fopen($path, 'r');

    if (!fp) {
        print 'Файл не може бути прочитаним!';
        exit();
    }

    $file = fread($fp, filesize($path));
    fclose($fp);

    $boundary = '--'.md5(uniqid(time())); // генеруємо розділювач
    $kod = 'utf-8';

    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\n";

    $multipart .= "--$boundary\n";
    $multipart .= "Content-Type: text/html; charset=$kod\n";
    $multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n";
    $multipart .= "$html\n\n";

    $message_part .= "--$boundary\n";
    $message_part .= "Content-Type: application/octet-stream\n";
    $message_part .= "Content_Transfer-Encoding: base64\n";
    $message_part .= "Content-Disposition: attachment; filename = \"".$path."\"\n\n";
    $message_part .= chunk_split(base64_encode($file))."\n";

    $multipart .= $message_part."--$boundary\n";

    if (!mail($to, $thm, $multipart, $headers)) {
        exit("Нажаль, лист не відправлено!");
    }

    // Автоматичний перехід на головну сторінку форуму
    header("Location: ".$_SERVER['PHP_SELF']);
}