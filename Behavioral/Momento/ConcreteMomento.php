<?php

namespace Behavioral\Momento;

class ConcreteMomento implements MomentoInterface
{
      public function __construct(private CodeFile $codeFile)
      {
            
      }
      public function getSnapShot()
      {
            return $this->codeFile;
      }
}
