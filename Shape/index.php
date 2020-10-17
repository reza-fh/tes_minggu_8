<?php

require "vendor/autoload.php";

use Tugas\Square;
use Tugas\Triangle;
use Tugas\Circle;

echo (new Square())->getArea();
echo PHP_EOL;
echo (new Triangle())->getArea();
echo PHP_EOL;
echo (new Circle())->getArea();