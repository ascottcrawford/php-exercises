<?php

require_once 'Rectangle.php';
require_once 'Square.php';

$areaTest = new Rectangle(5, 9);
echo "Area: " . $areaTest->area() . PHP_EOL;


$areaTest = new Rectangle(80, 55);
echo "Area: " . $areaTest->area() . PHP_EOL;


$square = new Square(10, 10);
echo "Area: " . $square->area() . PHP_EOL;
echo "Perimeter: " . $square->perimeter() . PHP_EOL;
