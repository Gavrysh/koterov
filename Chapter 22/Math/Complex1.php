<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 7:10
 */

class Complex1
{
    public $re, $im;

    public function add(Complex1 $y)
    {
        $this->re += $y->re;
        $this->im += $y->im;
    }

    public function __toString()
    {
        return '('.$this->re.', '.$this->im.')';
    }
}