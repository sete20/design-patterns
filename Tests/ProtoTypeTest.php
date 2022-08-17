<?php
namespace Tests;

use Creational\ProtoType\ProtoTypes\ManualCarProtoType,Creational\ProtoType\ProtoTypes\AutomaticProtoType;
use PHPUnit\Framework\TestCase;
class FactoryMethodTest extends TestCase
{
    protected function setUp(): void
    {
      parent::setUp();
    }
  
    public function  testCanCreateAutomaticCarWithClone()
    {
      $AutomaticCarPrototype = new AutomaticProtoType();
      for($index=0; $index<=10;$index++){
      $newCar = clone $AutomaticCarPrototype;
      $this->assertInstanceOf(AutomaticProtoType::class ,$newCar);
      }
    }
    public function  testCanCreateManualCarWithClone()
    {

      $ManualCarPrototype = new ManualCarProtoType();
      for($index=0; $index<=10;$index++){
      $newCar = clone $ManualCarPrototype;
      $this->assertInstanceOf(ManualCarPrototype::class ,$newCar);
      }
    }
}