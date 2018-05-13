<?php

/*
 * defines the interface of objects the factory method creates. 
 */

namespace DesignPattern\CreationalPatterns\FactoryMethod;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteProductB extends AbstractProduct
{
    /**
     * 
     * @var unknown
     */
    private $product;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\FactoryMethod\ConcreteProductB $product
         */
        $this->product = "Concrete Product B";
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\FactoryMethod\AbstractProduct::getProduct()
     */
    public function getProduct()
    {
        return $this->product;
    }
}
