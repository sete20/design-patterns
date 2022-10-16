<?php

namespace Tests;

use Creational\proxy\ATMProxy;

use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
      public function testCanDepositFromATM()
      {
            $proxy =  new ATMProxy();
            $proxy->deposit(1000);
            $proxy->deposit(1000);
            $proxy->deposit(3000);
            $proxy->deposit(5000);
            $this->assertEquals(10000, $proxy->getBalance());
      }

      public function testCanWithdrawFromATM()
      {
            $proxy =  new ATMProxy();
            $proxy->deposit(1000);
            $proxy->deposit(1000);
            $proxy->deposit(3000);
            $proxy->deposit(5000);
            $proxy->withdraw(9000);
            $this->assertEquals(1000, $proxy->getBalance());
      }
}
