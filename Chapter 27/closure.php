<?php ## Захоплені замиканням змінні зберігаються у обєкті Closure

$message = 'Робота не може бути продовженна з помилок:<br>';
$check = function(array $errors) use ($message) {
    if (isset($errors) && count($errors) > 0) {
        echo $message;
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
};

echo '<pre>';
print_r($check);
echo '</pre>';