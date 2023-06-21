<?php
include_once('Shape.php');
include_once('Circle.php');
include_once('Ractangle.php');
include_once('Square.php');

$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->DienTich() . '<br />';
echo 'Circle perimeter: ' . $circle->ChuVi() . '<br />';

$rectangle = new Ractangle('Rectangle 01', 3, 4);
echo 'Rectangle area: ' . $rectangle->DienTich() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->ChuVi() . '<br />';

$square = new Square('Square 01', 4);
echo 'Square area: ' . $square->DienTich() . '<br />';
echo 'Square perimeter: ' . $square->ChuVi() . '<br />';
?>