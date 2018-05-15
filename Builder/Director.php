<?php

/*
 * Director class.
 *
 * constructs an object using the AbstractBuilder
 * and return the object/product
 */
namespace DesignPattern\CreationalPatterns\Builder;

/**
 * 
 * @author Christophe
 *
 */
class Director
{
    /**
     * 
     * @var unknown
     */
    private $_builder;
    
    /**
     * 
     * @param AbstractBuilder $builder
     */
    public function __construct(AbstractBuilder $builder)
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Builder\Director $_builder
         */
        $this->_builder = $builder;
        $builder->buildPartA();
        $builder->buildPartB();
    }
    
    /**
     * 
     * @return unknown
     */
    public function getProduct()
    {
        return $this->_builder->getProduct();
    }
}
