<?php

include_once "shape.php";
include_once "ReSize.php";
class rectangle extends shape implements ReSize
{
    public $width;
    public $height;
    public function __construct($name,$width,$height)
    {
        $this->width=$width;
        $this->height=$height;
        parent::__construct($name);
    }
    public function calArea(){
        return $this->width*$this->height;
    }
    public function calPerimeter(){
        return ($this->height+$this->width)*2;
    }
    public function reSize($percent)
    {
    }
}