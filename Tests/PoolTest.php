<?php
namespace Tests;

use Creational\POOL\Car;
use Creational\POOL\CarPool;

use PHPUnit\Framework\TestCase;
class FactoryMethodTest extends TestCase
{
  private $carPool,$car;
    protected function setUp(): void
    {
      parent::setUp();
      $this->carPool = new CarPool(); 
      $this->car = new Car();
    }
  
    public function  testCanRentCar()
    {
      $myCar = $this->carPool->rentCar();
      $myCar2 = $this->carPool->rentCar();

      $this->assertInstanceOf(Car::class ,$myCar);
      $this->assertEquals(2, $this->carPool->getReport());
    }
    public function  testCanFreeCar()
    {
      $myCar = $this->carPool->rentCar();
      $this->carPool->freeCar(new Car());
      // $this->assertEquals(0, $this->carPool->getReport());
      $this->assertInstanceOf(Car::class,$myCar);

    }
}