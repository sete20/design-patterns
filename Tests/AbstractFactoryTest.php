<?php
namespace Tests;

use Creational\AbstractFactory\Models\BenzCar;
use Creational\AbstractFactory\Models\BMWCar;
use Creational\AbstractFactory\Factories\CarAbstractFactory;
use PHPUnit\Framework\TestCase;
class AbstractFactoryTest extends TestCase{
      private $carFactory;

      public function testCanCreateBMWCar()
      {
            $carFactory = new CarAbstractFactory(2000);
            $BMWCar = $carFactory->createBMWCar();
            $this->assertInstanceOf(BMWCar::class, $BMWCar);
      }

      public function testCanCreateBENZCar()
      {
            $carFactory = new CarAbstractFactory(2000);
            $BENZCar = $carFactory->createBENZCar();
            $this->assertInstanceOf(BenzCar::class, $BENZCar);
      }


}