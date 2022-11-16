<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Behavioral\Mediator\LeftRoad;
use Behavioral\Mediator\RightRoad;
use Behavioral\Mediator\RoadLightMediator;
use Behavioral\Mediator\Road;
use Behavioral\Momento\Originator;
use Behavioral\Momento\CareTaker;
use Behavioral\Momento\CodeFile;
use Behavioral\Momento\ConcreteMomento;




class MomentoTest extends TestCase
{
      /**
       * @var Originator
       */
      private  $originator;

      /**
       * @var CareTaker
       */
      private  $careTaker;

      // /**
      //  * @var Originator
      //  */
      // private  $originator;
      protected function setUp() :void
      {
            $this->originator = new Originator();
            $this->careTaker = new CareTaker($this->originator);
      }
      
      public function testCanSaveCodeFileUpdates(){
            $this ->originator->addNewEcho();
            $this ->originator->addNewVar();
            $this->careTaker->commit();
            $codeFile = $this->originator->getCodeFile();
            $this->assertEquals(3, count($codeFile->getLines()));
      }

      public function testCanRestoreCodeFileUpdates(){
            $this ->originator->addNewEcho();
            $this ->originator->addNewVar();
            $this->careTaker->commit();
            $this ->originator->addNewEcho();
            $this ->originator->addNewVar();
            $this->careTaker->rollback();
            $codeFile = $this->originator->getCodeFile();
            $this->assertEquals(3, count($codeFile->getLines()));
      }
}
