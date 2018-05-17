<?php

/*
 * concrete implementor, the class implemented
 */

namespace DesignPattern\StructuralPatterns\Bridge;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteImplementorA extends AbstractImplementor
{
   /**
    * 
    * @var unknown
    */
    private $_concreteImplementatorA;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Bridge\ConcreteImplementorA $_concreteImplementatorA
         */
        $this->_concreteImplementatorA = "Concrete Implementor A";
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Bridge\AbstractImplementor::operateImplementor()
     */
    public function operateImplementor()
    {
        return $this->_concreteImplementatorA;
    }

    
}
