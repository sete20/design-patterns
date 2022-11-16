<?php

namespace Behavioral\Mediator;

abstract class Road 
{
      public const STOP_EVENT = 'stop';
      public const MOVE_EVENT = 'move';
      private $getRoadStatus = '';

      public function __construct()
      {
            
      } 
       /**
     * @param MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator): void
    {
        $this->mediator = $mediator;
    }
   public function stop(){
      $this->road_status = self::STOP_EVENT;
   }
   public function move(){
      $this->road_status = self::MOVE_EVENT;
   }

   abstract function getId() :string;  
   public function getRoadStatus():string
   {
      return $this->getRoadStatus;
   }
}
