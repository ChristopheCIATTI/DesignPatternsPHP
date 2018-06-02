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
class ProductBa extends AbstractProductB
{
    /**
     * 
     * @var unknown
     */
    private $_product = null;
    
    /**
     * 
     * @param unknown $_product
     */
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ProductBa $product
         */
        $this->_product= "Product Ba";
    }

    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\AbstractFactory\AbstractProductB::getProduct()
     */
    public function getProduct() : string
    {
        return $this->_product;
    }

    
}
