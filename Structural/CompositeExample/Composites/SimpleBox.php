<?php

namespace Structural\CompositeExample\Composites;

use Structural\CompositeExample\Interfaces\ProductInterface;

class SimpleBox implements ProductInterface
{

      /**
       * @var int
       */
      protected $price;

      public function __construct(int $price)
      {
            $this->price = $price;
      }

      public function getPrice(){
            return $this->price;
      }
}
