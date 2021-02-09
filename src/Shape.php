<?php

/**
 * Class: csci409fa20
 * User: ajzincone
 * Date: 2/8/2021
 * Time: 8:07 PM
 */
 
  class Shape
  {
      const SHAPE_TYPE = 1;
      public $name = "";
      protected $length = "";
      protected $width = "";
      protected $id = "";

      function __construct($length, $width)
      {
          $this->name = "";
          $this->length = $length;
          $this->width = $width;
          $id = uniqid();
      }

      function getName()
      {
          return $this->name;
      }

      function setName($name)
      {
          $this->name = $name;
      }

      function getId()
      {
          return $this->id;
      }

      public function area()
      {
          return $this->length * $this->width;
      }

      public static function getTypeDescription()
      {
          return "Type: " . static::SHAPE_TYPE;
      }
      public function getFullDescription()
      {
          return "Shape<#$this->id>: $this->name - $this->length x $this->width";
      }








  }
