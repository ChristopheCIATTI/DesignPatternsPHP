<?php

namespace DesignPattern\StructuralPatterns\Decorator;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteComponent extends AbstractComponent
{
    /**
     * 
     * @var unknown
     */
    private $_component;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Decorator\ConcreteComponent $_component
         */
        $this->_component = "Concrete Compenent";
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Decorator\AbstractComponent::operation()
     */
    public function operation()
    {
        return $this->_component;
    }

}