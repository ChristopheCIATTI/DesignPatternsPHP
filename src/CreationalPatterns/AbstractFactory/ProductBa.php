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
class ProductBa extends AbstractProductB
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
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ProductBa $product
         */
        $this->product= "Product Ba";
    }

    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\AbstractFactory\AbstractProductB::getProduct()
     */
    public function getProduct()
    {
        return $this->product;
    }

    
}
