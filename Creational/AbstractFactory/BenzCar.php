<?php
namespace Creational\AbstractFactory;
use Creational\AbstractFactory\CarInterface;
class BenzCar implements CarInterface{

      private $price,$tax;

      public function __construct(int $price,int $tax)
      {
            $this->price = $price;
            $this->tax = $tax;

      }
      public function calculatePrice(){
            return $this->price +$this->tax+130;
      }
}
