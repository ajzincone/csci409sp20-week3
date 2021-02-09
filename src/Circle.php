<?php

/**
 * Class: csci303fa20
 * User: ajzincone
 * Date: 2/8/2021
 * Time: 10:33 PM
 */
 
class Circle extends Shapes
{
    const SHAPE_TYPE = 3;
    protected $radius = "";

    function __construct($radius)
    {
        $this->radius = $radius;
        parent::__construct(0,0);

    }

    public function area()
    {
        return (pi() * $this->radius) ** 2;
    }


    public function getFullDescription()
    {
        return "Circle<#$this->id>: $this->name - $this->length x $this->width";
    }

}
