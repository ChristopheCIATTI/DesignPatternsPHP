<?php

/*
 * Product or ConcreteProduct
 * 
 * defines a product object to be created by the corresponding concrete factory. 
 */

namespace DesignPattern\CreationalPatterns\AbstractFactory;

/**
 * 
 * @author Christophe
 *
 */
class ProductAa extends AbstractProductA
{   
    /**
     * 
     * @var unknown
     */
    public $product;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ProductAa $product
         */
        $this->product= "Product Aa";
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\AbstractFactory\AbstractProductA::getProduct()
     */
    public function getProduct()
    {
        return $this->product;   
    }
    
}
