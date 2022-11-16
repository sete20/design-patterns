<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Behavioral\Iterator\City;
use Behavioral\Iterator\EgyptCitiesCollection;

class IteratorTest extends TestCase
{
      public function testCanUseOddIterator()
      {
            $cairo = new City('Cairo', 1000);
            $giza = new City('Giza', 5000);
            $alex = new City('Alex', 2000);
            $aswan = new City('Aswan', 400);

            $egypt = new EgyptCitiesCollection();
            $egypt->addCity($cairo)
                  ->addCity($giza)
                  ->addCity($alex)
                  ->addCity($aswan);

            $list = [];

            foreach ($egypt as $city) {
                  $list[] = $city->getName();
            }

            self::assertEquals(['Giza', 'Aswan'], $list);
      }
      public function testCanUseEvenIterator()
      {
            $cairo = new City('Cairo', 1000);
            $giza = new City('Giza', 5000);
            $alex = new City('Alex', 2000);
            $aswan = new City('Aswan', 400);

            $egypt = new EgyptCitiesCollection();
            $egypt->addCity($cairo)
                  ->addCity($giza)
                  ->addCity($alex)
                  ->addCity($aswan);

            $list = [];

            foreach ($egypt->getEvenIterator() as $city) {
                  $list[] = $city->getName();
            }

            self::assertEquals(['Giza', 'Alex'], $list);
      }

      public function testCanUseSortedCitiesIterator()
      {
            $cairo = new City('Cairo', 1000);
            $giza = new City('Giza', 5000);
            $alex = new City('Alex', 2000);
            $aswan = new City('Aswan', 400);

            $egypt = new EgyptCitiesCollection();
            $egypt->addCity($cairo)
                  ->addCity($giza)
                  ->addCity($alex)
                  ->addCity($aswan);

            $list = [];

            foreach ($egypt->getSortedCitiesIterator() as $city) {
                  $list[] = $city->getName();
            }

            self::assertEquals(['Giza', 'Alex', 'Cairo', 'Aswan'], $list);
      }
}
