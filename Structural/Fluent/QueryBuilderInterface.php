<?php

namespace Structural\Fluent;

interface QueryBuilderInterface
{

      public function select(array $fields);
      public function from(string $table, string $alias);
      public function where(array $conditions);
}
