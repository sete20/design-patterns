<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\Models\BENZBrand;
use Creational\FactoryMethod\Interfaces\BrandFactoryInterface;

class BENZBrandFactory implements BrandFactoryInterface
{
     public function BuildBrand()
     {
       return new BENZBrand();
     } 
}