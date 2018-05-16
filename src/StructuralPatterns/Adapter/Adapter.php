<?php

/*
 * Adapter class.
 */

namespace DesignPattern\StructuralPatterns\Adapter;

/**
 * 
 * @author Christophe
 *
 */
class Adapter extends AbstractTarget
{
    /**
     * 
     * @var unknown
     */
    private $_adaptee;
    
    /**
     * 
     * @param Adaptee $adaptee
     */
    public function __construct(Adaptee $adaptee)
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Adapter\Adapter $_adaptee
         */
        $this->_adaptee = $adaptee;
    }
    
    /**
     * Adapt the method of Adaptee class here.
     * The method request ofthis class is the specificRequest of adaptee class 
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Adapter\AbstractTarget::request()
     */
    public function request()
    {
        return $this->_adaptee->specificRequest();
    }
 
}
