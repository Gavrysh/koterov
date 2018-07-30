<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 10:28
 */

class Child
{
    public $father;

    public function __construct(Father $father)
    {
        $this->father = $father;
    }

    public function __destruct()
    {
        echo '<h2>Child is death</h2>';
    }
}