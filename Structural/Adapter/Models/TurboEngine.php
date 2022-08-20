<?php
namespace Structural\Adapter\Models;

use Structural\Adapter\Interfaces\TurboEngineInterface;

class TurboEngine implements TurboEngineInterface
{
      public function startTurboEngine()
      {
            return "turbo engine started";
      }
}