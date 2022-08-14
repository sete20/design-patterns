<?php
namespace Creational\Builder\Builders;
use Creational\Builder\Models\BENZCar;
use Creational\Builder\Interfaces\CarBuilderInterface;
use Creational\Builder\Models\Car;

class BenzCarBuilder implements CarBuilderInterface
{
      /**
       * @var Car $type
       */
      private $type;
      public function createCar(){
            $this->type = new BENZCar();
      }  
      public function addEngine()
      {
            $this->type->setPart('engine','BEN-engines');

      }
      public function addBody()
      {
            $this->type->setPart('body','BEN-bodies');
      }  
      public function addDoor()
      {
            $this->type->setPart('Door','BEN-Doors');

      }

      public function addWheel()
      {
            $this->type->setPart('wheel','BEN-wheels');
      }  
      public function getCar():Car
      {
            return $this->type;
      }
}
