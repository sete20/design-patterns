<?php

namespace Creational\proxy;

class BankAccount implements BankAccountInterface
{
      /**
       * 
       * @var array
       */
      private $transactions;
      public function deposit(int $amount)
      {
            $this->transactions[] = +$amount;
            return true;
      }
      public function withdraw(int $amount)
      {
            if ($this->getBalance() >= $amount) {
                  $this->transactions[] = -$amount;
                  return $amount;
            }
            return false;
      }
      public function getBalance()
      {
            return array_sum($this->transactions);
      }
}
