<?php
require_once "Area.php";
require_once "Circle.php";
require_once "Rectangle.php";


$circle = new Circle(15);

echo $circle->getArea() . PHP_EOL;

echo PHP_EOL;

$rectangle = new Rectangle(15, 35);

echo $rectangle->getArea();