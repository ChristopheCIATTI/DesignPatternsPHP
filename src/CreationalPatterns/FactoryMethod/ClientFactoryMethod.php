<?php

namespace DesignPattern\CreationalPatterns\FactoryMethod;

class ClientFactoryMethod
{
    private $ConcreteCreatorA;
    private $ConcreteCreatorB;
    
    public function __construct()
    {
        $this->ConcreteCreatorA = new ConcreteCreatorA();
        $this->ConcreteCreatorA->factoryMethod();
        
        var_dump($this->ConcreteCreatorA->factoryMethod());
        
        $this->ConcreteCreatorB =new ConcreteCreatorB();
        $this->ConcreteCreatorB->factoryMethod();
        
        var_dump($this->ConcreteCreatorB->factoryMethod());
    }
}