<?php


class shape
{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function show () {
        return "i am a shape . my name is $this->name";
    }
}