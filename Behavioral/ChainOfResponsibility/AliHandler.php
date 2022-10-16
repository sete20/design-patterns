<?php

namespace Behavioral\ChainOfResponsibility;

class AliHandler extends AbstractHandler
{
      public function handler(Request $request)
      {
            if ($request->getId() % 2 === 0) {
                  $request->setDone(true);
                  $request->setHandler(self::class);
                  return  $request;
            }

            return parent::handler($request);
      }
}
