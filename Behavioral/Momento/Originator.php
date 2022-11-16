<?php

namespace Behavioral\Momento;

class Originator
{
      private $codeFile;
      public function __construct( )
      {
$this->codeFile= new CodeFile();
      }
      public function addNewEcho()
      {
            $this->codeFile->addNewLine("Echo 'TEST New Line';");
      }
      public function addNewVar()
      {
            $this->codeFile->addNewLine('$x=15;');
      }
      public function Save(): MomentoInterface
      {
            return new ConcreteMomento(clone $this->codeFile);
      }
      public function Restore(MomentoInterface $momentoInterface)
      {
            $this->codeFile = $momentoInterface->getSnapShot();
      }

      public function getCodeFile(): CodeFile
      {
           return  $this->codeFile;
      }
}
