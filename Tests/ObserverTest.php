<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Behavioral\Observer\RestaurantObserver;
use Behavioral\Observer\KitchenObserver;
use Behavioral\Observer\WaiterIObserver;
use Behavioral\Observer\CashierObserver;
use Behavioral\Observer\WaiterObserver;

class ObserverTest extends TestCase
{
      private $restaurantObserver;
      private $waiterObserver;
      private $cashierObserver;
      private $kitchenObserver;

      protected function setUp( ) :void
      {
            $this->restaurantObserver = new RestaurantObserver();
            $this->waiterObserver  =  new WaiterObserver();
            $this->cashierObserver = new CashierObserver();
            $this->kitchenObserver = new KitchenObserver();
            $this->restaurantObserver->attach($this->waiterObserver);
            $this->restaurantObserver->attach($this->cashierObserver);
            $this->restaurantObserver->attach($this->kitchenObserver);
      }
      public function testCanNotifyAllObserversWhenNewOrderIsComing()
      {
          $this->restaurantObserver->addNewOrder(5);
  
          $this->assertEquals('Cashier Is Ready For Orders 5',$this->cashierObserver->getState());
          $this->assertEquals('Kitchen Is Ready For Orders 5',$this->kitchenObserver->getState());
          $this->assertEquals('Waiter Is Ready For Orders 5',$this->waiterObserver->getState());
      }
  
      public function testCanNotifyAllObserversWhenTwoNewOrdersAreComing()
      {
          $this->restaurantObserver->addNewOrder(3);
          $this->restaurantObserver->addNewOrder(3);
       
          $this->assertEquals('Cashier Is Ready For Orders 3',$this->cashierObserver->getState());
          $this->assertEquals('Kitchen is ready for order number 3',$this->kitchenObserver->getState());
          $this->assertEquals('Waiter is ready for order number 3',$this->waiterObserver->getState());
      }
  
  
}
