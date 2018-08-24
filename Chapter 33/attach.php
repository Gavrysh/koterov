<?php
if (!empty($_POST))
{
    // Обробник HTML-форми
    require_once 'handler.php';
}
?>

<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <title>Відправка листа з вкладенням</title>
    <meta charset="utf-8">
</head>
<body>
    <table>
        <form enctype="multipart/form-data" method="post">
            <tr>
                <td width="50%">Кому:</td>
                <td align="rigth">
                    <input type="text" name="mail_to" maxlength="32">
                </td>
            </tr>
            <tr>
                <td width="50%">Тема:</td>
                <td align="rigth">
                    <input type="text" name="mail_subject" maxlength="64">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Сповіщення:<br>
                    <textarea cols="56", rows="8" name="mail_msg"></textarea>
                </td>
            </tr>
            <tr>
                <td width="50%">Зображення:</td>
                <td align="rigth">
                    <input type="file" name="mail_file" maxlength="64">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Відправити">
                </td>
            </tr>
        </form>
    </table>
</body>
</html>
