<?php

namespace Behavioral\Iterator;

class AreaIterator implements \Iterator
{
      public function __construct(private EgyptCitiesCollection $citiesCollection, private $index = 0, private $sortedCities = [])
      {
            $this->sortByArea();
      }
      public function key()
      {
            return $this->index;
      }
      public function current(): mixed
      {
            return $this->sortedCities[$this->index];
      }
      public function next(): void
      {
            $this->index += 1;
      }
      public function valid(): bool
      {
            return isset($this->citiesCollection->getEgCities()[$this->index]);
      }
      public function rewind(): void
      {
            $this->index = 0;
      }
      private function sortByArea()
      {
            $areas = [];
            $this->sortedCities = $this->citiesCollection->getEgCities();;
            foreach ($this->citiesCollection->getEgCities() as $key => $city) {
                  $areas[] = $city->getArea();
            }

            array_multisort($areas, SORT_DESC, $this->sortedCities);
      }
}
