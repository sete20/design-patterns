<?php

namespace Creational\StaticFactory\Models;

use Creational\StaticFactory\Interfaces\CarInterface;

class BENZCar implements CarInterface
{

      public function model()
      {
            return "BENZ";    
      }
}
