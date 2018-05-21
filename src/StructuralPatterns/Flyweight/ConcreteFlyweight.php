<?php

namespace DesignPattern\StructuralPatterns\Flyweight;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteFlyweight extends AbstractFlyweight
{
    /**
     * 
     * @var unknown
     */
    private $_instrinsicState;

    /**
     * 
     * @param unknown $extrinsicState
     */
    public function __construct($extrinsicState)
   {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Flyweight\ConcreteFlyweight $_instrinsicState
         */
       $this->_instrinsicState = $extrinsicState;
   }
    
   /**
    * 
    * {@inheritDoc}
    * @see \DesignPattern\StructuralPatterns\Flyweight\AbstractFlyweight::operation()
    */
    public function operation($extrinsicState)
    {
        //echo $this->_instrinsicState;
        return $this->_instrinsicState;
    }

    
    

}
