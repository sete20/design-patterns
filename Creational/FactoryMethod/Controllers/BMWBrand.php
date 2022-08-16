<?php
namespace Creational\FactoryMethod\Controllers;

use Creational\FactoryMethod\Interfaces\CarBrandInterface;

class BMWBrand implements CarBrandInterface{

      public function createBrand()
      {
            return 'BMW Brand';
      }
}