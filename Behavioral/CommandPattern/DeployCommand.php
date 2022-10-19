<?php

namespace Behavioral\CommandPattern;

use Behavioral\CommandPattern\GitReceiver;

class DeployCommand implements CommandInterface
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
            $this->gitReceiver->gitAdd();
            $this->gitReceiver->gitCommit();
            $this->gitReceiver->gitPush();
      }
}
