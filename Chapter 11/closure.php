<?php ##Замикання
$message = 'Робота не може бути продовжена за нявності помилок:<br>';
$check = function(array $errors) use ($message)
{
    if (isset($errors) && count($errors) > 0) {
        echo $message;
        foreach ($errors as $err) {
            echo $err.'<br>';
        }
    }
};

$check([]);
//...
$errors[] = 'Внесіть ім\'я користувача';
$check($errors);
//...
$message = 'Список вимог'; //Вже не змінити
$errors = ['PHP', 'MySQL', 'memcache'];
$check($errors);