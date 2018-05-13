<?php

/*
 * Cient Factory Method,
 * the pattern is run here
 */

namespace DesignPattern\CreationalPatterns\FactoryMethod;

/**
 * 
 * @author Christophe
 *
 */
class ClientFactoryMethod
{
    /**
     * 
     * @var unknown
     */
    private $ConcreteCreatorA;
    /**
     * 
     * @var unknown
     */
    private $ConcreteCreatorB;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\FactoryMethod\ClientFactoryMethod $ConcreteCreatorA
         */
        $this->ConcreteCreatorA = new ConcreteCreatorA();
        $this->ConcreteCreatorA->factoryMethod();
        
        var_dump($this->ConcreteCreatorA->factoryMethod());
        
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\FactoryMethod\ClientFactoryMethod $ConcreteCreatorB
         */
        $this->ConcreteCreatorB = new ConcreteCreatorB();
        $this->ConcreteCreatorB->factoryMethod();
        
        var_dump($this->ConcreteCreatorB->factoryMethod());
    }
}