<?php

/*
 * Product or ConcreteProduct
 * 
 * defines a product object to be created by the corresponding concrete factory. 
 * Concrete Product
 */

namespace DesignPattern\CreationalPatterns\AbstractFactory;

/**
 * 
 * @author Christophe
 *
 */
class ProductAb extends AbstractProductA
{
    /**
     * 
     * @var unknown
     */
    private $_product = null;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ProductAb $product
         */
        $this->_product = "Product Ab";
    }

    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\AbstractFactory\AbstractProductA::getProduct()
     */
    public function getProduct() : string
    {
        return $this->_product;
    }

    
}
