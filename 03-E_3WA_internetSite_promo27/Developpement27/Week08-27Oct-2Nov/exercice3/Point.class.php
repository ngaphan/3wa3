<?php

class Point
{
    private $x;
    private $y;

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        if ($x < 0) {
            $this->x = 0;
        } else {
            $this->x = $x;
        }
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    public function __construct($x, $y)
    {
        echo 'construction of current class!<br />';
        $this->x = $x;
        $this->y = $y;
    }

    public function calc()
    {
        return $this->x * $this->y;
    }
}