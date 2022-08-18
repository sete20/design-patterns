<?php

namespace Creational\StaticFactory\Models;
use Creational\StaticFactory\Interfaces\CarInterface;

class BMWCar implements CarInterface
{

      public function model()
      {
            return "BMW";
      }
}
