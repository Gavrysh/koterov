<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if (!isset($_SESSION['time'])) {
    $_SESSION['time'] = date('H:i:s');
}

function s_decode()
{
    $file = ini_get('session.save_path').DIRECTORY_SEPARATOR.'sess_'.$_COOKIE[ini_get('session.name')];
    $content = explode('|', file_get_contents($file));
    //preg_match_all('#[\w ]+\|.*?[;]?[\w]+?#', file_get_contents($file),$mathes);
    return $content;
}

$_SESSION['integer var'] = 123;
$_SESSION['float var'] = 1.23;
$_SESSION['octal var'] = 0x123;
$_SESSION['string var'] = "Hello world";
$_SESSION['array var'] = array('one', 'two', [1,2,3]);

$object = new stdClass();
$object->foo = 'bar';
$object->arr = array('hello', 'world');

$_SESSION['object var'] = $object;
$_SESSION['integer again'] = 42;

echo '<pre>';
print_r(s_decode());
echo '</pre>';

//phpinfo();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';