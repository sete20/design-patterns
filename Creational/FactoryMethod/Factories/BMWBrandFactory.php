<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\Controllers\BENZBrand;
use Creational\FactoryMethod\Controllers\BMWBrand;
use Creational\FactoryMethod\Interfaces\BrandFactoryInterface;

class BMWBrandFactory implements BrandFactoryInterface
{
     public function BuildBrand()
     {
       return new BMWBrand();
     } 
}