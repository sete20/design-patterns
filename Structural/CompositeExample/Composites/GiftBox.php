<?php

namespace Structural\CompositeExample\Composites;

use Structural\CompositeExample\Interfaces\GiftInterface;
use Structural\CompositeExample\Interfaces\ProductInterface;

class GiftBox implements ProductInterface,GiftInterface
{
      /**
       * @var int
       */
      protected $price;

      /**
       * @var int
       */
      protected $giftPrice;

      public function __construct(int $price,int $giftPrice)
      {
            
            $this->price = $price;
            $this->giftPrice = $giftPrice;

      }

      public function getPrice(){
            return $this->price + $this->giftPackagePrice();  

      }

      public function giftPackagePrice()
      {
          return $this->giftPrice;  
      }
}
