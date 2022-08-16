<?php
namespace Tests;

use Creational\FactoryMethod\Factories\BENZBrandFactory;
use Creational\FactoryMethod\Factories\BMWBrandFactory;
use Creational\FactoryMethod\Controllers\BENZBrand;
use Creational\FactoryMethod\Controllers\BMWBrand;
use PHPUnit\Framework\TestCase;
class FactoryMethodTest extends TestCase
{
    public function  testCanBuildBMWBrand()
    {
      $brandFactory = new BMWBrandFactory();
      $myBrand = $brandFactory->BuildBrand();
      $this->assertInstanceOf(BMWBrand::class, $myBrand);
    }
    public function  testCanBuildBENZBrand()
    {
      $brandFactory = new BENZBrandFactory();
      $myBrand = $brandFactory->BuildBrand();
      $this->assertInstanceOf(BENZBrand::class, $myBrand);

    }
}