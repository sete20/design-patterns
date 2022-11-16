<?php

namespace Behavioral\Observer;

use SplObserver;
use SplSubject;
use SplObjectStorage;
class RestaurantObserver implements SplSubject
{
      private int $orderNumber =0;
      private $Observers ;
      public function __construct()
      {
             $this->Observers = new SplObjectStorage();
      }
      public function attach(SplObserver $splObserver){
            $this->Observers ->attach($splObserver);
      }
      public function detach(SplObserver $splObserver){
            $this->Observers ->detach($splObserver);

      }

      public function notify():void{
            /**
             * @var SplObserver $observer
             */
            foreach($this->Observers as $observer){
                 $observer->update($this);
            }
      }
      public function addNewOrder($ordersCounts){
            /**
             * @var int $ordersCounts 
             */
            $this->orderNumber += $ordersCounts;
            $this->notify();
      }

      /**
       * Get the value of orderNumber
       */ 
      public function getOrderNumber():int
      {
            return $this->orderNumber;
      }
}
