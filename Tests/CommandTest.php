<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Behavioral\CommandPattern\CLIInvoker;
use Behavioral\CommandPattern\GitReceiver;
use Behavioral\CommandPattern\DeployCommand;

class CommandTest extends TestCase
{     
      /**
       * Summary of 
       * @var CLIInvoker
       */
      private $invoker;
      public function setUp():void 
      {
            $this->invoker = new CLIInvoker();
      }
      public function testCanDeployCommand()
      {
            $receiver = new GitReceiver();
            $command = new DeployCommand($receiver);
            $this->invoker->setCommand($command);
            $this->invoker->run();
            $this->assertCount(3, $receiver->getGitLog());
      }
     
}
