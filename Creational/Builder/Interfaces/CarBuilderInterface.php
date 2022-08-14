<?php
namespace Creational\Builder\Interfaces;

use Creational\Builder\Models\Car;

interface CarBuilderInterface{
    public function createCar();  
    public function addBody();  
    public function addDoor();
    public function addWheel();  
    public function addEngine();
    public function getCar() :Car;  
}