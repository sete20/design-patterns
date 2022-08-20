<?php
namespace Structural\BridgeExample\Bridges;

use Structural\BridgeExample\Interfaces\CarColorInterface;

class RedCar implements CarColorInterface
{

      public function getColor()
      {
            return "red";
      }
}