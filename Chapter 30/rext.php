<?php ## Використання відображення бібліотеки

$consts = [];
foreach (get_loaded_extensions() as $val) {
    $ext = new ReflectionExtension($val);
    $consts = array_merge($consts, $ext->getConstants());
}
echo '<pre>'.var_export($consts, true).'</pre>';
