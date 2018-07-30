<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 7:58
 */

class Logger0
{
    public $f, $name, $lines = [];

    public function __construct($name, $fname)
    {
        $this->name = $name;
        $this->f = fopen($fname, 'a+');
    }

    public function log($str)
    {
        $prefix = '['.date("Y-m-d_h:i:s ").$this->name.'] ';
        $str = preg_replace('#^#m', $prefix, rtrim($str));
        $this->lines[] = $str.'<br>';
    }

    public function close()
    {
        fputs($this->f, implode('', $this->lines));
        fclose($this->f);
    }
}