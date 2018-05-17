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
class ConcreteImplementorB extends AbstractImplementor
{
    /**
     * 
     * @var unknown
     */
    private $_concreteImplementorB;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Bridge\ConcreteImplementorB $_concreteImplementorB
         */
        $this->_concreteImplementorB = "Concrete Implementor B";
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Bridge\AbstractImplementor::operateImplementor()
     */
    public function operateImplementor()
    {
        return $this->_concreteImplementorB;
    }

}
