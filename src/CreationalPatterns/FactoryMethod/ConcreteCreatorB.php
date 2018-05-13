<?php

namespace DesignPattern\CreationalPatterns\FactoryMethod;

class ConcreteCreatorB extends AbstractCreator
{
    public function factoryMethod()
    {
        $this->product = new ConcreteProductB();
        return $this->product;
    }
    
}
