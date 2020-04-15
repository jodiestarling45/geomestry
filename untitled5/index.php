<?php
include_once "rectangle.php";
include_once "square.php";
include_once "circle.php";
include_once "cylinder.php";
$circle = new circle("circle",10);
echo "area = ".$circle->calArea();
echo "perimeter =".$circle->calPerimeter()."<br>";
$circle->reSize(100);
//$circle->reSize();
echo "area = ".$circle->calArea();
echo "perimeter =".$circle->calPerimeter()."<br>";
$cylinder= new cylinder("cylinder",10,10);
echo "area = ".$cylinder->calArea();
echo "perimeter =".$cylinder->calPerimeter()."<br>";
$square= new square("square",10);
echo "area = ".$square->calArea();
echo "perimeter =".$square->calPerimeter()."<br>";
echo $square->HowToColor();

$rectangle = new rectangle("rectangle",10,20);
echo "area = ".$rectangle->calArea();
echo "perimeter =".$rectangle->calPerimeter()."<br>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
