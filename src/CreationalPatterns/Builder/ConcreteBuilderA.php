<?php

namespace DesignPattern\CreationalPatterns\Builder;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteBuilderA extends AbstractBuilder
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
         * @var \DesignPattern\CreationalPatterns\Builder\ConcreteBuilderA $_product
         */
        $this->_product = new Product();
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Builder\AbstractBuilder::buildPartA()
     */
    public function buildPartA()
    {
        $this->_product->addPart("Part A");
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Builder\AbstractBuilder::buildPartB()
     */
    public function buildPartB()
    {
        $this->_product->addPart("Part B");
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Builder\AbstractBuilder::getProduct()
     */
    public function getProduct()
    {
        return $this->_product;
    }
}
