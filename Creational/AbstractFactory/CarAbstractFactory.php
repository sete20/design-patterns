<?php
namespace Creational\AbstractFactory;
use Creational\AbstractFactory\BMWCar,Creational\AbstractFactory\BenzCar;
class CarAbstractFactory {

      private $price,$tax = 2000;
      public function __construct($price)
      {
            $this->price = $price;
      }
      public function createBMWCar() :BMWCar
      {
             return new BMWCar($this->price);
      }

      public function createBENZCar(): BenzCar
      {
            return new BenzCar($this->price,$this->tax);
      }
}
