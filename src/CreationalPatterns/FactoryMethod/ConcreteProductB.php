<?php

namespace DesignPattern\CreationalPatterns\FactoryMethod;

class ConcreteProductB extends AbstractProduct
{
    private $product;
    
    public function __construct()
    {
        $this->product = "Concrete Product B";
    }
    
    public function getProduct()
    {
        return $this->product;
    }
}
