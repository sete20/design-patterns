<?php

namespace Structural\Facade;
use Structural\Facade\ConvertorLib\Animator;
use Structural\Facade\ConvertorLib\PNGConvertor;
use Structural\Facade\ConvertorLib\JPGConvertor;
use Structural\Facade\ConvertorLib\GIFConvertor;
use Structural\Facade\ConvertorLib\Photo;
class ConverterFacade
{     
      /**
       * @var Animator
       */
      private  $animator ;
      public function __construct(Animator $animator)
      {
            $this->animator = $animator;
      }

      public function GifConvertor(Photo $photo){
            $gifConvertor = new GIFConvertor($this->animator);
            return $gifConvertor->convertToGIF($photo);
      }
      public function PNGConvertor(Photo $photo){
            $gifConvertor = new PNGConvertor($this->animator);
            return $gifConvertor->convertToPNG($photo);  
      }
      public function JPGConvertor(Photo $photo){
            $gifConvertor = new JPGConvertor($this->animator);
            return $gifConvertor->convertToJPG($photo);
      }
}
