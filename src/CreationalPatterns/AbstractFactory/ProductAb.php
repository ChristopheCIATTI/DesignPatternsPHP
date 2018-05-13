<?php

/*
 * Product or ConcreteProduct
 * 
 * defines a product object to be created by the corresponding concrete factory. 
 */

namespace DesignPattern\CreationalPatterns\AbstractFactory;

class ProductAb extends AbstractProductA
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
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ProductAb $product
         */
        $this->product= "Product Ab";
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