<?php
namespace Tests;
use \PHPUnit\Framework\TestCase;
use Structural\Decorator\BlackPaintDecorator;
use Structural\Decorator\BluePaintDecorator;
use Structural\Decorator\Car;
use Structural\Decorator\Painting;
use Structural\Decorator\RedPaintDecorator;

class DecoratorTest extends TestCase{

      public function testCarPaintCarWithBlueAndBlueColors(){
            $car = new Car();
            $painting = new Painting();
            $painting = new BlackPaintDecorator($painting);
            $painting= new BluePaintDecorator($painting);
            $painting->paint($car);
            $this->assertEquals('-blue--black-',$car->getColor()) ;
      }

      public function testCarPaintCarWithBlackAndRedAndBlueColors(){
            $car = new Car();
            $painting = new Painting();
            $painting = new RedPaintDecorator($painting);
            $painting = new BluePaintDecorator($painting);
            $painting = new BlackPaintDecorator($painting);
            $painting->paint($car);
            $this->assertEquals('-black--blue--red-',$car->getColor()) ;
      }
}