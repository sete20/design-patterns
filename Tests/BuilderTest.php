<?php
namespace Tests;

use Creational\Builder\CarProducer;
use Creational\Builder\Builders\BenzCarBuilder;
use Creational\Builder\Builders\BMWCarBuilder;
use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\BENZCar;

use PHPUnit\Framework\TestCase;
class BuilderTest extends TestCase
{
      public function testCanProduceBMWCar()
      {
            $BMWBuilderCar = new BMWCarBuilder(); 
            $carProducer = new CarProducer($BMWBuilderCar);
            $myProducedCar = $carProducer->ProduceCar();
            $this->assertInstanceOf(BMWCar::class, $myProducedCar);
      }
      public function testCanProduceBENZCar()
      {
            $BENZBuilderCar = new BenzCarBuilder();
            $carProducer = new CarProducer($BENZBuilderCar);
            $myProducedCar = $carProducer->ProduceCar();
            $this->assertInstanceOf(BENZCar::class, $myProducedCar);
      }

}