<?php

namespace Creational\StaticFactory\Factories;
use Creational\StaticFactory\Models\BMWCar,Creational\StaticFactory\Models\BENZCar;

class StaticFactory{
      public static function factory(string $type){
            if($type=='BMW'){
                  return new BMWCar();
            }   elseif($type=='BENZ'){
                  return new BENZCar();
            }
            return null;
      }
}