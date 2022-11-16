<?php

namespace Behavioral\Iterator;

use Behavioral\Iterator\EgyptCitiesCollection;

class OddIterator implements \Iterator
{
      public function __construct(private EgyptCitiesCollection $citiesCollection, private $index = 1)
      {
      }
      public function current(): mixed
      {
            return $this->citiesCollection->getEgCities()[$this->index];
      }
      public function next(): void
      {
            $this->index = $this->nextOdd();
      }
      public function key()
      {
            return $this->index;
      }
      public function valid(): bool
      {
            return isset($this->citiesCollection->getEgCities()[$this->index]);
      }
      public function rewind(): void
      {
            $this->index = 1;
      }
      private function nextOdd()
      {
            for ($item = 0, $itemMax = count($this->citiesCollection->getEgCities()); $item < $itemMax; $item++) {
                  if (++$this->index % 2 === 1) {
                        return $this->index;
                        break;
                  }
                  return  ++$this->index;
            }
      }
}
