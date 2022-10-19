<?php

namespace Behavioral\CommandPattern;

class CLIInvoker
{
      private $command;
      public function setCommand(CommandInterface $command)
      {
            $this->command = $command;
      }
      public function run()
      {
            $this->command->execute();
      }
}
