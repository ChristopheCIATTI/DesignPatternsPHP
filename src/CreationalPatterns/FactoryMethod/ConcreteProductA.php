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
class ConcreteProductA extends AbstractProduct
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
         * @var \DesignPattern\CreationalPatterns\FactoryMethod\ConcreteProductA $product
         */
        $this->product = "Concrete Product A";
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
