<?php

/*
 * Refuned abstraction. It's the abstract layer betwen implentor and client.
 */

namespace DesignPattern\StructuralPatterns\Bridge;

/**
 * 
 * @author Christophe
 *
 */
class RefinedAbstraction extends AbstractAbstraction
{
    /**
     * 
     * @var unknown
     */
    private $_implementator;
    
    /**
     * 
     * @param AbstractImplementor $implemetator
     */
    public function __construct(AbstractImplementor $implemetator)
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Bridge\RefinedAbstraction $_implementator
         */
        $this->_implementator = $implemetator;
    }

    /**
     * 
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Bridge\AbstractAbstraction::operation()
     */
    public function operation()
    {
        return $this->_implementator->operateImplementor();
    }


    
}