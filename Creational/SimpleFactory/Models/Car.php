<?php

namespace Creational\SimpleFactory\Models;

class Car
{
      /**
       * @var string
       */
      private $type;
      public function __construct(string $type){
            $this->type= $type;
      }
 
}
