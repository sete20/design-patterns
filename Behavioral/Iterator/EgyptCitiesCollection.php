<?php

namespace Behavioral\Iterator;

use Traversable;

class EgyptCitiesCollection implements \IteratorAggregate
{
      private $egCities = [];
      public function addCity(City $city)
      {
            $this->egCities[] = $city;
            return $this;
      }
      public function removeCity(string $name)
      {
            foreach ($this->egCities as $key => $city) {
                  if ($city->getName === $name)   unset($this->egCities[$key]);
            }
      }

      /**
       * Get the value of egCities
       */
      public function getEgCities()
      {
            return $this->egCities;
      }
      public function getIterator(): Traversable
      {
            return new OddIterator($this);
      }

      public function getEvenIterator()
      {
            return new EvenIterator($this);
      }

      public function getSortedCitiesIterator()
      {
            return new AreaIterator($this);
      }
}
