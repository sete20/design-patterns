<?php

namespace Behavioral\ChainOfResponsibility;

class SayedHandler extends AbstractHandler
{

      public function handler(Request $request)
      {
            if ($request->getId() < 30) {
                  $request->setDone(true);
                  $request->setHandler(self::class);
                  return  $request;
            }

            return parent::handler($request);
      }
}
