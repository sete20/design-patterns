<?php

namespace Structural\Decorator;
use Structural\Decorator\PaintingInterface;

class Painting implements PaintingInterface
{

      public function paint(Car $car)
      {
            return $car->getColor();
      }

}
