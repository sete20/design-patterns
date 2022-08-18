<?php
namespace Tests;

use Creational\SimpleFactory\Factories\CarFactory;
use Creational\SimpleFactory\Models\Car;
use PHPUnit\Framework\TestCase;
class SimpleFactoryTest extends TestCase
{
    public function  testCanCreateCar()
    {
      $factory = new CarFactory();
      $BMWCar = $factory->createCar('BMW');
      $BENZCar = $factory->createCar('BENZ');
      $this->assertInstanceOf(Car::class, $BMWCar);
      $this->assertInstanceOf(Car::class, $BENZCar);
    }
}