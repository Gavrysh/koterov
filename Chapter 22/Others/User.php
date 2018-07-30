<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 12:53
 */

class User
{
    public $login, $password, $referrer, $time;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
        $this->referrer = $_SERVER['PHP_SELF'];
        $this->time = time();
    }

    public function __sleep()
    {
        return ['login', 'referrer', 'time'];
    }

    public function __wakeup()
    {
        $this->time = time();
    }
}