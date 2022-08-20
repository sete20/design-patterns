<?php
namespace Structural\Adapter;

use Structural\Adapter\Interfaces\NormalEngineInterface;

class StartCar 
{
/**
 * @var NormalEngineInterface
 */
 private $engine;

 public function __construct(NormalEngineInterface $engine)
 {
      $this->engine = $engine;
 }  

 public function start()
 {
    return  $this->engine->startEngine();
 }
}