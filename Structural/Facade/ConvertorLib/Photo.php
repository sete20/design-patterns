<?php

namespace Structural\Facade\ConvertorLib;

class Photo
{
      private $extension;
     
	/**
	 * @return mixed
	 */
	public function getExtension() {
		return $this->extension;
	}
	
	/**
	 * @param mixed $extension 
	 * @return Photo
	 */
	public function setExtension($extension): self {
		$this->extension = $extension;
		return $this;
	}

      public function __toString(){
            return $this->type;
      }

}
