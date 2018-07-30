<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 11:46
 */

class Counter
{
    private static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public function __destruct()
    {
        self::$count--;
    }

    public static function getCount()
    {
        return self::$count;
    }
}