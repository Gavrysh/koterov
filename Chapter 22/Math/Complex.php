<?php

class Complex
{
    public $re, $im;

    public function add($re, $im)
    {
        $this->re += $re;
        $this->im += $im;
    }
}