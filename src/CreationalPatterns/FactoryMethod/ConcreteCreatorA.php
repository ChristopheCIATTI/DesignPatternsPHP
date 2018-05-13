<?php

namespace DesignPattern\CreationalPatterns\FactoryMethod;

class ConcreteCreatorA extends AbstractCreator
{
    public function factoryMethod()
    {
        $this->product = new ConcreteProductA();
        return $this->product;
    }
}
