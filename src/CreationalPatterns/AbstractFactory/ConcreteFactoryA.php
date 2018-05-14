<?php

namespace DesignPattern\CreationalPatterns\AbstractFactory;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteFactoryA extends AbstractFactory
{   
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\AbstractFactory\AbstractFactory::createProductA()
     */
    public function createProductA()
    {
        return new ProductAa();
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\AbstractFactory\AbstractFactory::createProductB()
     */
    public function createProductB()
    {
        return new ProductAb();
    }

    
}
