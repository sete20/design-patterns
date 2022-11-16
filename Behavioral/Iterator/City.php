<?php

namespace Behavioral\Iterator;

class City
{
      public function __construct(private string $name, private int $area)
      {
      }


      /**
       * Get the value of name
       */
      public function getName()
      {
            return $this->name;
      }

      /**
       * Get the value of area
       */
      public function getArea()
      {
            return $this->area;
      }
}
