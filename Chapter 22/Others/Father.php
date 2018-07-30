<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 10:26
 */

class Father
{
    public $children = [];

    public function __destruct()
    {
        echo '<h2>Father is death</h2>';
    }
}