<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
use Structural\CompositeExample\Composites\BigBox;
use Structural\CompositeExample\Composites\GiftBox;
use Structural\CompositeExample\Composites\SimpleBox;

class CompositeTest extends TestCase
{ 
      public function testCanGetTotalPriceOfPackageTree(){
            $item1 = new SimpleBox(300);
            $item2 = new SimpleBox(300);
            $item3 = new SimpleBox(300);
            $item4 = new SimpleBox(300);
            $bigBox = new BigBox([
            $item1,
            $item2,
            $item3,
            $item4
            ]);
            $this->assertEquals(1200, $bigBox->getPrice());
      }
      public function testCanAddCar(){
            $item1 = new SimpleBox(300);
            $item2 = new SimpleBox(300);
            $item3 = new SimpleBox(300);
            $item4 = new SimpleBox(300);
            $bigBox = new BigBox([
            $item1,
            $item2,
            $item3,
            $item4
            ]);
            $gifBox = new GiftBox(300,100);
            $this->assertEquals(1200, $bigBox->getPrice());

            $bigBox->add($gifBox);
            $this->assertEquals(1600, $bigBox->getPrice());
      } 
      public function testCanDeleteCar(){
            $item1 = new SimpleBox(300);
            $item2 = new SimpleBox(300);
            $item3 = new SimpleBox(300);
            $item4 = new SimpleBox(300);
            $bigBox = new BigBox([
            $item1,
            $item2,
            $item3,
            $item4
            ]);
            $gifBox = new GiftBox(300,100);
            $this->assertEquals(1200, $bigBox->getPrice());
            $bigBox->add($gifBox);
            $bigBox->delete($gifBox);
            $this->assertEquals(1200, $bigBox->getPrice());
      }
}
