<?php
namespace Structural\Adapter\Models;

use Structural\Adapter\Interfaces\NormalEngineInterface;

class NormalEngine implements NormalEngineInterface
{
      public function startEngine()
      {
            return "normal engine started";   
      }
}