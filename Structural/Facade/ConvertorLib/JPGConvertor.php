<?php

namespace Structural\Facade\ConvertorLib;
use Structural\Facade\ConvertorLib\Animator;
class JPGConvertor
{
      /**
       * @var Animator
       */
      private $animator;      
      public function __construct(Animator $animator)
      {
            $this->animator= $animator;
      }
      public function convertToJPG(Photo $photo){
            $type = $photo->getExtension() . 'jpg';
            $photo->setExtension($type);
            $this->animator->animatePhoto($photo);
            return $photo;
      }
}
