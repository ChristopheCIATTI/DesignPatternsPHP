<?php

namespace DesignPattern\CreationalPatterns\AbstractFactory;

/**
 * 
 * @author Christophe
 *
 *CroncreteFacotry create the product
 */
class ConcreteFactoryB extends AbstractFactory
{
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\AbstractFactory\AbstractFactory::createProductA()
     */
    public function createProductA()
    {
        return new ProductAb();
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\AbstractFactory\AbstractFactory::createProductB()
     */
    public function createProductB()
    {
        return new ProductBb();
    }    
}
