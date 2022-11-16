<?php

namespace Behavioral\Observer;

use SplObserver;
use SplSubject;
use Behavioral\Observer\RestaurantObserver;
class CashierObserver implements SplObserver
{
      private  $state;
      public function update(SplSubject $splSubject) :void{
            /**
             * @var RestaurantObserver $splSubject
             */
            $this->state =  sprintf(
            'Cashier Is Ready For Orders %s'
            ,$splSubject->getOrderNumber());
      }

      /**
       * Get the value of state
       */ 
      public function getState()
      {
            return $this->state;
      }
}
