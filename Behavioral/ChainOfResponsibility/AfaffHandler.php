<?php

namespace Behavioral\ChainOfResponsibility;

use phpDocumentor\Reflection\Types\Parent_;

class AfaffHandler extends AbstractHandler
{
      public function handler(Request $request)
      {
            if ($request->getId() < 20) {
                  $request->setDone(true);
                  $request->setHandler(self::class);
                  return  $request;
            }

            return parent::handler($request);
      }
}
