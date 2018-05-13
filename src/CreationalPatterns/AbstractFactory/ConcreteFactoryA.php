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
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ConcreteFactoryA $product
         */
        $this->product = new ProductAa();
        
        return $this->product;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\AbstractFactory\AbstractFactory::createProductB()
     */
    public function createProductB()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ConcreteFactoryA $product
         */
        $this->product = new ProductAb();
        return $this->product ;
    }

    
}
