<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Behavioral\Mediator\LeftRoad;
use Behavioral\Mediator\RightRoad;
use Behavioral\Mediator\RoadLightMediator;
use Behavioral\Mediator\Road;
class MediatorTest extends TestCase
{
    private $rightRoad,$leftRoad;
     protected function setUp() :void
     {
      $this->rightRoad = new RightRoad();
      $this->leftRoad = new LeftRoad();
      $this->lightMediator = new RoadLightMediator($this->rightRoad, $this->leftRoad);
     }
     public function testCanMoveRightRoadBasedOnLeftRoad()
     {
         $this->lightMediator->action($this->leftRoad,Road::STOP_EVENT);
         $this->assertEquals($this->rightRoad->getRoadStatus(),'move');
     }
 
     public function testCanStopRightRoadBasedOnLeftRoad()
     {
        $this->lightMediator->action($this->leftRoad, Road::MOVE_EVENT);
        $this->assertEquals($this->rightRoad->getRoadStatus(),'stop');
     }
 
     public function testCanMoveLeftRoadBasedOnRightRoad()
     {
         $this->lightMediator->action($this->rightRoad,Road::STOP_EVENT);
         $this->assertEquals($this->leftRoad->getRoadStatus(),'move');
     }
 
     public function testCanStopLeftRoadBasedOnRightRoad()
     {
         $this->lightMediator->action($this->rightRoad,Road::MOVE_EVENT);
         $this->assertEquals($this->leftRoad->getRoadStatus(),'stop');
     }
}
