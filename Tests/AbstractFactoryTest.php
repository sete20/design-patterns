<?php
namespace Tests;

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
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