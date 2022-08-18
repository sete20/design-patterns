<?php
namespace Creational\FactoryMethod\Models;

use Creational\FactoryMethod\Interfaces\CarBrandInterface;

class BMWBrand implements CarBrandInterface{

      public function createBrand()
      {
            return 'BMW Brand';
      }
}