<?php

namespace Behavioral\CommandPattern;

use Behavioral\CommandPattern\GitReceiver;

class RevertCommand implements CommandInterface
{
      /**
       * Summary of 
       * @var GitReceiver
       */
      public $gitReceiver;
      public function __construct(GitReceiver $gitReceiver)
      {
            $this->gitReceiver = $gitReceiver;
      }
      public function  execute()
      {
            $this->gitReceiver->gitRevert();
      }
}
