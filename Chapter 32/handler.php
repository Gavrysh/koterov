<?php ## Приймання POST даних з форми

$name = [];

if (isset($_POST['firstName'])) {
    $name[] = $_POST['firstName'];
}
if (isset($_POST['lastName'])) {
    $name[] = $_POST['lastName'];
}
if (count($name) > 0) {
    echo 'Привіт, '.implode(' ', $name).'!';
} else {
    echo 'Привіт, незнайомець!';
}