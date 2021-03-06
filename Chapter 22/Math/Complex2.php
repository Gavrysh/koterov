<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 7:39
 */

class Complex2
{
    public $im, $re;

    public function __construct($re, $im)
    {
        $this->re = $re;
        $this->im = $im;
    }

    public function add(Complex2 $y)
    {
        $this->re += $y->re;
        $this->im += $y->im;
    }

    function __toString()
    {
        return '('.$this->re.', '.$this->im.')';
    }
}