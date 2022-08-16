<?php
namespace Creational\POOL;
class Car
{
      private $renAt;
      
      public function __construct()
      {
       $this->renAt = new \DateTime();
      }
      public function moveCar(){
            return "car is moving";
      }
}