<?php

namespace Behavioral\ChainOfResponsibility;

abstract class AbstractHandler implements HandlerInterface
{
      private ?HandlerInterface $nextHandler = null;

      public function setNext(HandlerInterface $handler): HandlerInterface
      {
            $this->nextHandler = $handler;
            return $handler;
      }

      public function handler(Request $request)
      {

            if ($this->nextHandler) {
                  return $this->nextHandler->handler($request);
            }
            return  $request;
      }
}
