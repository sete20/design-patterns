<?php

namespace Creational\SimpleFactory\Factories;
use Creational\SimpleFactory\Models\Car;
class CarFactory{
      public function createCar(string $type){
            return new Car($type);
      }
}