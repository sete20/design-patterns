<?php

namespace Structural\Facade\ConvertorLib;
use Structural\Facade\ConvertorLib\Animator;
class PNGConvertor
{
      /**
       * @var Animator
       */
      private $animator;      
      public function __construct(Animator $animator)
      {
            $this->animator= $animator;
      }
      public function convertToPNG(Photo $photo){
            $type = $photo->getExtension() . 'png';
            $photo->setExtension($type);
            $this->animator->animatePhoto($photo);
            return $photo;
      }

      
}
