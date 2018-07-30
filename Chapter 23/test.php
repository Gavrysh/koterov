<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 15:21
 */
require_once './Pages/StaticPage.php';

$id = 3;
$page = new StaticPage($id);
$page->render();
echo $page->id($id);