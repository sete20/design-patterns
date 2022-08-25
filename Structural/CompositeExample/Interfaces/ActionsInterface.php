<?php

namespace Structural\CompositeExample\Interfaces;

interface ActionsInterface
{

public function add(ProductInterface $product);
public function delete(ProductInterface $product);

}
