<?php

/*
 * Director class.
 * 
 * constructs an object using the InterfaceBuilder
 * and return the product
 */
namespace DesignPattern\CreationalPatterns\Builder;

/**
 * 
 * @author Christophe
 *
 */
class Director extends AbstractDirector
{
    /**
     * 
     * @param InterfaceBuilder $builder
     * @return AbstractProduct
     */
    
    private $builder;
    
    public function __construct(AbstractBuilder $builder)
    {
        $this->builder = $builder;
    }
    
    public function build()
    {
        $this->builder->addSubProductA();
        $this->builder->addSubProductB();
    }
    
    public function getProduct() : AbstractProduct
    {
        return $this->builder->getProduct();
    }
    
//     public function build(InterfaceBuilder $builder)  //: AbstractProduct
//     {
//         $builder->createProduct();
        
//         $builder->addSubProductA();
        
//         $builder->addSubProductB();
        
//         //return $builder->getProduct();
//     }
}
