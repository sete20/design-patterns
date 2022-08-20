<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
use Structural\BridgeExample\Bridges\BENZCar;
use Structural\BridgeExample\Bridges\BlueCar;
use Structural\BridgeExample\Bridges\BMWCar;
use Structural\BridgeExample\Bridges\RedCar;

class BridgeTest extends TestCase
{

      public function testCanCreateBMWBlueCar()
      {
            $carColor = new BlueCar();
            $BMWCar = new BMWCar($carColor);
            $this->assertEquals("the car type is BMW and the car color is blue",$BMWCar->getProduct());
      }

      public function testCanCreateBMWRedCar()
      {
            $carColor = new RedCar();
            $BMWCar = new BMWCar($carColor);
            $this->assertEquals("the car type is BMW and the car color is red",$BMWCar->getProduct());
      }

      public function testCanCreateBENZRedCar()
      {
            $carColor = new RedCar();
            $BENZCar = new BENZCar($carColor);
            $this->assertEquals("the car type is BENZ and the car color is red",$BENZCar->getProduct());
      }   
      
      public function testCanCreateBENZBlueCar()
      {
            $carColor = new RedCar();
            $BENZCar = new BENZCar($carColor);
            $this->assertEquals("the car type is BENZ and the car color is red",$BENZCar->getProduct());
      }
}