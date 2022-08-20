<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
use Structural\Adapter\EngineAdapter;
use Structural\Adapter\Models\NormalEngine;
use Structural\Adapter\Models\TurboEngine;
use Structural\Adapter\StartCar;

class AbstractFactoryTest extends TestCase
{

      public function testCanStartNormalEngine()
      {
            $engine = new NormalEngine();
            $car = new StartCar($engine);
            $this->assertEquals("normal engine started", $car->start());
      }

      public function testCanStartTurboEngine()
      {
            $engine = new TurboEngine();
            $adapter = new EngineAdapter($engine);
            $car = new StartCar($adapter);
            $this->assertEquals("turbo engine started", $car->start());
      }
}