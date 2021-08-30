<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 15.10.2019
 * Time: 11:20
 */

namespace core\chapter22;


class ComplexNumber
{
    public function __construct($real = 0.0, $im = 0.0)
    {
        $this->im = $im;
        $this->re = $real;
    }

    public function __toString()
    {
        return "Complex( re: ".$this->re.", im: ".$this->im." )";
    }

    public function add(ComplexNumber $other)
    {
        $this->re += $other->real();
        $this->im += $other->im();
    }

    public function real()
    {
        return $this->re;
    }

    public function im()
    {
        return $this->im;
    }

    private $re;
    private  $im;
}