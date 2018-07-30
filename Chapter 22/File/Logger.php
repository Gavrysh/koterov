<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 8:21
 */

class Logger
{
    public $f, $name, $lines = [], $t;

    public function __construct($name, $fname)
    {
        $this->name = $name;
        $this->f = fopen($fname, 'a+');
        $this->log('### __construct() called!');
    }

    public function __destruct()
    {
        $this->log('### __destruct() called!');
        fputs($this->f, implode('', $this->lines));
        fclose($this->f);
    }

    public function log($str)
    {
        $prefix = '['.date("Y-m-d_h:i:s ").$this->name.'] ';
        $str = preg_replace('#^#m', $prefix, rtrim($str));
        $this->lines[] = $str.'<br>';
    }
}