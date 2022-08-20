<?php
namespace Structural\BridgeExample\Bridges;

use Structural\BridgeExample\Abstracts\CarAbstract;
use Structural\BridgeExample\Interfaces\CarColorInterface;

class BMWCar extends CarAbstract 
{

   
      public function __construct(CarColorInterface $carColorInterface)
      {
            parent::__construct($carColorInterface);
      }
      public function getProduct()
      {
            return sprintf("the car type is %s and the car color is %s",'BMW',$this->carColorInterface->getColor());
            
      }
}