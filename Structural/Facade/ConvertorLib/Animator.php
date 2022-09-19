<?php

namespace Structural\Facade\ConvertorLib;

class Animator
{
      public function animatePhoto(Photo $photo){
            return $photo . 'animate';
      }
}
