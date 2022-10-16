<?php

namespace Structural\Fluent;

class QueryBuilder implements QueryBuilderInterface
{
      private array $fields;
      private string $table;
      private array $conditions;
      private string $alias;

      public function select(array $fields): self
      {
            $this->fields = $fields;
            return $this;
      }
      public function where(array $conditions): self
      {
            $this->conditions = $conditions;
            return $this;
      }
      public function from(string $table, string $alias): self
      {
            $this->table = $table;
            $this->alias = $alias;
            return $this;
      }

      public function getSql()
      {
            return  sprintf(
                  'SELECT %s FROM %s AS %s WHERE %s',
                  implode(',', $this->fields),
                  $this->table,
                  $this->alias,
                  implode('AND', $this->conditions)

            );
      }
}
