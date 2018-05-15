<?php

namespace DesignPattern\CreationalPatterns\Prototype;

/**
 * 
 * @author Christophe
 *
 */
class ConcretePrototypeA extends AbstractPrototype
{   
    /**
     * 
     * @var unknown
     */
    private $_product;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Prototype\ConcretePrototypeA $_product
         */
        $this->_product = "Product A";
    }

    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Prototype\AbstractPrototype::getProduct()
     */
    public function getProduct()
    {
        return $this->_product;
    }

    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Prototype\AbstractPrototype::__clone()
     */
    public function __clone()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Prototype\ConcretePrototypeA $_product
         */
        $this->_product = $this->_product . " is cloned";
    }

    
}