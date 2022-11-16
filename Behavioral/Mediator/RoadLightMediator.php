<?php

namespace Behavioral\Mediator;

class RoadLightMediator implements MediatorInterface
{
      public const STOP_EVENT = 'stop';
      public const MOVE_EVENT = 'move';


      public function __construct(private Road $rightRoad,private Road $leftRoad )
      {
            $this->rightRoad->setMediator($this);
            $this->leftRoad->setMediator($this);
      }     
      public function action(Road $road,$event){
            if ($road->getId() ==='LEFT' && $event == Road::MOVE_EVENT) $this->rightRoad->stop();
            else $this->rightRoad->move();

            if ($road->getId() ==='RIGHT' && $event == Road::MOVE_EVENT) $this->leftRoad->stop();
            else $this->leftRoad->move();
      }
}
