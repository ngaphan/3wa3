<?php

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        echo 'construction of current class!<br />';
        $this->x = $x;
        $this->y = $y;
    }

    public function __destruct()
    {
        echo 'destruction of current class!<br />';
    }


    public function calc()
    {
        return $this->x * $this->y;
    }
}