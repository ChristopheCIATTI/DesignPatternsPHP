<?php

namespace DesignPattern\StructuralPatterns\Flyweight;

/**
 * 
 * @author Christophe
 *
 */
class UnsharedConcreteFlyweight extends AbstractFlyweight
{
    /**
     * 
     * @var unknown
     */
    private $_allState;
    
    public function __construct($extrinsicState)
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Flyweight\UnsharedConcreteFlyweight $_allState
         */
        $this->_allState = $extrinsicState;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Flyweight\AbstractFlyweight::operation()
     */
    public function operation($extrinsicState)
    {
        return $this->_allState;
    }

}
