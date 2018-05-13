<?php

namespace DesignPattern\CreationalPatterns\FactoryMethod;

class ConcreteProductA extends AbstractProduct
{
    private $product;
    
    public function __construct()
    {
        $this->product = "Concrete Product A";
    }
    
    public function getProduct()
    {
        return $this->product;
    }
}
