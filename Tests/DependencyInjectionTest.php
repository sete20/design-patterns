<?php
namespace Tests;

use Structural\DependencyInjection\DatabaseConfig;
use Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;
class DependencyInjectionTest extends TestCase
{
    public function  testCanGetDataBaseStringUrlFromDatabaseConnection()
    {
      $databaseConfig = new DatabaseConfig('localhost', 'root', 'root', '80','database');
      $databaseConnection= new DatabaseConnection($databaseConfig);
      $this->assertEquals('mysql://root:root@localhost:80/database',$databaseConnection->ConnectionString());
    }
 
}