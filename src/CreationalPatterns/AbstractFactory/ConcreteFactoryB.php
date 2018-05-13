<?php

namespace DesignPattern\CreationalPatterns\AbstractFactory;

/**
 * 
 * @author Christophe
 *
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
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ConcreteFactoryB $product
         */
        $this->product = new ProductBa();
        return $this->product ;
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
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ConcreteFactoryB $product
         */
        $this->product = new ProductBb();
        return $this->product ;
    }    
}