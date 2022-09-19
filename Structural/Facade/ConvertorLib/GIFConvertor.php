<?php

namespace Structural\Facade\ConvertorLib;
use Structural\Facade\ConvertorLib\Animator;
class GIFConvertor
{
      /**
       * @var Animator
       */
      private $animator;      
      public function __construct(Animator $animator)
      {
            $this->animator= $animator;
      }
      public function convertToGIF(Photo $photo){
            $type = $photo->getExtension() . 'gif';
            $photo->setExtension($type);
            $this->animator->animatePhoto($photo);
            return $photo->setExtension($photo);
      }
}
