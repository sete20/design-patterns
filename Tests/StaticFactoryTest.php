<?php
namespace Tests;

use Creational\StaticFactory\Factories\StaticFactory;
use Creational\StaticFactory\Models\BENZCar;
use Creational\StaticFactory\Models\BMWCar;
use PHPUnit\Framework\TestCase;
class StaticFactoryTest extends TestCase{
      public function testCanCreateBMWCar(){
            $this->assertInstanceOf(BMWCar::class,StaticFactory::factory('BMW'));
      }
      public function testCanCreateBENZCar(){
            $this->assertInstanceOf(BENZCar::class, StaticFactory::factory('BENZ'));
      }
}