<?php

require_once 'rectangle.php';
require_once 'square.php';

$rectA = new Rectangle(2,2);

echo "the area of this rectangle is " . $rectA->area() . " and that is it\n";

$squareB = new Square(3);

echo "perimeter of this square is " . $squareB->perimeter() . "\n";

$squareB = new Square(9);

echo "the area of this other square is " . $squareB->area() . "\n";

$rectB = new Rectangle(4,9);

echo "the perimeter of this other rectangle is " . $rectB->perimeter() . "\n";

echo $rectB->getHeight();

?>