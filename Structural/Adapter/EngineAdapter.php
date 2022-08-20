<?php
namespace Structural\Adapter;

use Structural\Adapter\Interfaces\NormalEngineInterface;
use Structural\Adapter\Models\TurboEngine;
class EngineAdapter implements NormalEngineInterface{
      /**
       * @var TurboEngine
       */
      private $engine;

      public function __construct(TurboEngine $engine)
      {
            $this->engine = $engine;
      }
      public function startEngine()
      {
            return $this->engine->startTurboEngine();
      }
}