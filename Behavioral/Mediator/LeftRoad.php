<?php

namespace Behavioral\Mediator;

class LeftRoad extends Road
{
      const ID = 'RIGHT';
      function getId(): string
      {
          return  self::ID;
      }
}
