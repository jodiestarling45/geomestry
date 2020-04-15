<?php

include_once "rectangle.php";
include "colorAble.php";
include_once "ReSize.php";
class square extends rectangle implements colorAble,ReSize
{

    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width,$width);
    }
    public function HowToColor()
    {
        return "color all four side ";
        // TODO: Implement HowToColor() method.
    }
    public function reSize($percent)
    {

    }

}