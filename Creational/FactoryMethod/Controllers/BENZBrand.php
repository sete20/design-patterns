<?php
namespace Creational\FactoryMethod\Controllers;

use Creational\FactoryMethod\Interfaces\CarBrandInterface;

class BENZBrand implements CarBrandInterface{

      public function createBrand()
      {
            return 'BENZ Brand';
      }
}