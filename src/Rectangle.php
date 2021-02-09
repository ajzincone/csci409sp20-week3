<?php

/**
 * Class: csci303fa20
 * User: ajzincone
 * Date: 2/8/2021
 * Time: 10:16 PM
 */
 
  class Rectangle extends Shape
  {
     const SHAPE_TYPE = 2;


     public function getFullDescription()
     {
         return "Rectangle<#$this->id>: $this->name - $this->length x $this->width";
     }







  }


