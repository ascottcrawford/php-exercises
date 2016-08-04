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

// $square = new Square(5);
// echo "Perimeter: " . $square->perimeter() . PHP_EOL;

echo "square width: " . $square->width . PHP_EOL;
echo "square height: " . $square->height . PHP_EOL;
echo "square side: " . $square->side . PHP_EOL;

$areaT2 = new Rectangle(2, 8);
echo "Area: " . $areaT2->area() . PHP_EOL;

