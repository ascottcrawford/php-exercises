<?php

class Square extends Rectangle
{

    public function __construct($side)

    {
        parent::__construct($side, $side);
    }

    public function perimeter()
    {
        return ($this->getheight() * 2) + ($this->getwidth() * 2);
    }
} 