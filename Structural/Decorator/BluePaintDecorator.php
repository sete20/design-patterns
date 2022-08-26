<?php

namespace Structural\Decorator;

class BluePaintDecorator extends PaintingDecorator
{
      private const COLOR= '-blue-';
      public function paint(Car $car)
      {
            $car->setColor(self::COLOR);
            return parent::paint($car);
      }
}
