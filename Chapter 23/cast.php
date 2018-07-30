<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 15:52
 */
require_once './Pages/StaticPage.php';

function echoPage(Page $obj)
{
    $obj->render();
}

$shape = new StaticPage(3);
echoPage($shape);
