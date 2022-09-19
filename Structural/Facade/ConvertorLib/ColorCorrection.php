<?php

namespace Structural\Facade\ConvertorLib;

class ColorCorrection
{
      public function correctColor(Photo $photo){
            return $photo.'color_correction';
      }
}
