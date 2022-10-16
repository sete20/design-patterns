<?php

namespace Behavioral\ChainOfResponsibility;

interface HandlerInterface
{
      public function setNext(HandlerInterface $handler);
      public function handler(Request $request);
}
