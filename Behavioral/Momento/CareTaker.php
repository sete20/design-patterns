<?php

namespace Behavioral\Momento;

class CareTaker
{
      public function __construct(private Originator $originator,private $momentos =[])
      {
            
      }
      public function commit(){
            $this->momentos[] = $this->originator->Save();
      }

      public function rollback(){
            $momento = array_pop($this->momentos) ;
            $this->originator->Restore($momento);
      }
}
