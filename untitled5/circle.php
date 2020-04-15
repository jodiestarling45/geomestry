<?php

include_once "shape.php";
include_once "ReSize.php";
class circle extends shape implements ReSize
{
    public $radius ;
    public function __construct($name,$radius)
    {
        $this->radius=$radius;
        parent::__construct($name);
    }
    public function calArea(){
        return pi()*pow($this->radius,2);
    }
    public function calPerimeter(){
        return pi()*$this->radius*2;
    }
    public function reSize($percent)
    {
        $currentValue=$this->radius;
        $this->radius+=$percent*$currentValue+$currentValue;
    }

}