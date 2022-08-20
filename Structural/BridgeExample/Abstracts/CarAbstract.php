<?php

namespace Structural\BridgeExample\Abstracts;

use Structural\BridgeExample\Interfaces\CarColorInterface;

abstract class CarAbstract 
{
      /**
       * @var CarColorInterface
       */
      protected $carColorInterface;
      public function __construct(CarColorInterface $carColorInterface)
      {
            $this->carColorInterface =$carColorInterface;
      }
      abstract function getProduct();
}