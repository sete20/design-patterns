<?php
namespace Creational\Builder\Builders;
use Creational\Builder\Interfaces\CarBuilderInterface;
use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface{
       /**
       * @var Car $type
       */
      private $type;
      public function createCar(){
            $this->type = new BMWCar();
      }  
      public function addEngine()
      {
            $this->type->setPart('engine','BMW-engines');

      }
      public function addBody()
      {
            $this->type->setPart('body','BMW-bodies');
      }  
      public function addDoor()
      {
            $this->type->setPart('Door','BMW-Doors');

      }

      public function addWheel()
      {
            $this->type->setPart('wheel','BMW-wheels');
      }  
      public function getCar():Car
      {
            return $this->type;
      }
}