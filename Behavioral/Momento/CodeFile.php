<?php

namespace Behavioral\Momento;

class CodeFile
{
      private $lines=[];

      public function __construct()
      {
            $this->liens[] =  "<?php";
      }   
      
      public function getLines(): array
      {
           return  $this->liens;
      }  

      public function addNewLine(String $line)
      {
            $this->liens[] =  $line;
      }  
}
