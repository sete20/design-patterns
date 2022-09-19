<?php

namespace Structural\DependencyInjection;
use Structural\DependencyInjection\DatabaseConfig;
class DatabaseConnection
{
      /**
       * @var DatabaseConfig
       */
      private $config ;
      public function __construct(DatabaseConfig $config)
      {
            $this->config = $config;
      } 

      public function ConnectionString(){
      return sprintf('mysql://%s:%s@%s:%s/%s',
      $this->config->getUsername(),
      $this->config->getPassword(),
      $this->config->getHost(),
      $this->config->getPort(),
      $this->config->getDatabaseName(),
      );
      }
}
