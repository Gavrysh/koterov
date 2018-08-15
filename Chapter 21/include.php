<?php ##Аналог функції include, але не працює
error_reporting(E_ALL);
ini_set('display_errors', 1);

$code = file_get_contents('eval.php', true);
eval("?>$code<?php");