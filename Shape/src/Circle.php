<?php

namespace Tugas;

use Tugas\Shape;

class Circle extends Shape
{
    private $radius=28;

    public function getArea()
    {
        return $this->radius/2;
    }
}