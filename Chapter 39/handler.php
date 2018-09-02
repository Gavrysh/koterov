<?php ## POST-обробник форми

if (!empty($_POST)) {
    echo 'Ім\'я: '.htmlspecialchars($_POST['name']).'<br>' ?? $_POST['name'];
    echo 'Пароль: '.htmlspecialchars($_POST['password']).'<br>' ?? $_POST['password'];
}