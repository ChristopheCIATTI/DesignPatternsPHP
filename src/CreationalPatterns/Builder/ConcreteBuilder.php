<?php

/*
 * ConcreteBuilder
 * Here is the ConcreteBuilder (model) A
 * For the example A
 * 
 * 
 * constructs and assembles parts of the product by implementing the InterfaceBuilder.
 * defines and keeps track of the representation it creates.
 * provides an interface for retrieving the product.
 */

namespace DesignPattern\CreationalPatterns\Builder;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteBuilder extends AbstractBuilder {
   
    /**
     * 
     * @var unknown
     */
    private $product;
    
    
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Builder\InterfaceBuilder::addSubProductA()
     */
    public function addSubProductA()
    {
        $this->product->setPart("Here this the subProduct A", new SubProductA());
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Builder\InterfaceBuilder::addSubProductB()
     */
    public function addSubProductB()
    {
        $this->product->setPart("Here this the subProduct B", new SubProductB());
    }
    
    function __construct()
    {
        /**
         *
         * @var \DesignPattern\CreationalPatterns\Builder\ConcreteBuilder $product
         */
        $this->product = new Product();
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Builder\InterfaceBuilder::getProduct()
     */
    public function getProduct(): AbstractProduct
    {
        return $this->product;
    }

}