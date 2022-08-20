<?php
namespace Structural\BridgeExample\Bridges;

use Structural\BridgeExample\Interfaces\CarColorInterface;

class BlueCar implements CarColorInterface
{

      public function getColor()
      {
            return "blue";
      }
}