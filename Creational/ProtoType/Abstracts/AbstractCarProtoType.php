<?php

namespace Creational\ProtoType\Abstracts;

abstract class AbstractCarProtoType
 {
      protected $model;
      private $flag;
      abstract function ___clone();
      /**
       * @return mixed
       */
      public function getFlag()
      {
            return $this->flag;
      }
      /**
       * @param mixed $flag
       */
      public function setFlag($flag){
            $this->flag = $flag;
      }

 }