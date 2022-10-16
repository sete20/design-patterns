<?php

namespace Tests;

use Behavioral\ChainOfResponsibility\AfaffHandler;
use Behavioral\ChainOfResponsibility\AliHandler;
use Behavioral\ChainOfResponsibility\Request;
use Behavioral\ChainOfResponsibility\SayedHandler;
use PHPUnit\Framework\TestCase;
use Structural\Fluent\QueryBuilder;

class ChainOfResponsibilityTest extends TestCase
{




      public function  testCanHandleAliHandler()
      {
            $ali = new AliHandler();
            $afaf = new AfaffHandler();
            $sayed = new SayedHandler();
            $ali->setNext($afaf->setNext($sayed));
            $request = new Request();
            $request->setId(4);
            /**@var Request $reponse
             */
            $response =  $ali->handler($request);

            self::assertTrue($response->getDone());
            self::assertEquals(AliHandler::class, $response->getHandler());
      }
      public function  testCanHandleAfaffHandler()
      {
            $ali = new AliHandler();
            $afaf = new AfaffHandler();
            $sayed = new SayedHandler();

            $afaf->setNext($sayed);
            $ali->setNext($afaf);
            $request = new Request();
            $request->setId(9);
            /**@var Request $reponse
             */
            $response =  $ali->handler($request);

            self::assertTrue($response->getDone());
            self::assertEquals(AfaffHandler::class, $response->getHandler());
      }

      public function  testCanHandleSayedHandler()
      {
            $ali = new AliHandler();
            $afaf = new AfaffHandler();
            $sayed = new SayedHandler();

            $afaf->setNext($sayed);
            $ali->setNext($afaf);
            $request = new Request();
            $request->setId(27);
            /**@var Request $reponse
             */
            $response =  $ali->handler($request);

            self::assertTrue($response->getDone());
            self::assertEquals(SayedHandler::class, $response->getHandler());
      }
}
