<?php

namespace Structural\CompositeExample\Composites;

use Structural\CompositeExample\Interfaces\ActionsInterface;
use Structural\CompositeExample\Interfaces\ProductInterface;

class BigBox implements ProductInterface, ActionsInterface
{
      /**
       * @var ProductInterface[]
       */
      protected $products;

      public function __construct(array $products)
      {
            $this->products = $products;
      }
      public function getPrice()
      {
            $totalPrice = 0;
            foreach ($this->products as $product){
                  $totalPrice += $product->getPrice();
            }
            return $totalPrice;
      }

      public function add(ProductInterface $product)
      {
            $this->products[] = $product;
      }

      public function delete(ProductInterface $product)
      {
            $this->products = array_filter($this->products,function($productItem) use($product){
                  if($productItem != $product){
                        return $productItem;
                  } 
                        return null;
            });
           
      }
}
