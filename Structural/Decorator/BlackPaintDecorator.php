<?php

namespace Structural\Decorator;

class BlackPaintDecorator extends PaintingDecorator
{
   
            private const COLOR= '-black-';
            public function paint(Car $car)
            {
                  $car->setColor(self::COLOR);
                  return parent::paint($car);
            }
}
