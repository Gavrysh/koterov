<?php ## Перехоплення виключення відображення

try {
    $obj = new ReflectionFunction('spoon');
} catch (ReflectionException $e) {
    echo 'Виключення: '.$e->getMessage();
}
