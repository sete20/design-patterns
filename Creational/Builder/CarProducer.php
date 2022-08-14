<?php
namespace Creational\Builder;
use Creational\Builder\Interfaces\CarBuilderInterface;
use Creational\Builder\Models\Car;

class CarProducer
{
      /**
       * @var CarBuilderInterface
       */
      private $Builder;
      public function __construct(CarBuilderInterface $Builder)
      {
            $this->Builder = $Builder;
      }

      public function ProduceCar():Car
      {
            $this->Builder->createCar();
            $this->Builder->addBody();
            $this->Builder->addDoor();
            $this->Builder->addEngine();
            $this->Builder->addWheel();
      return $this->Builder->getCar();
      }
}