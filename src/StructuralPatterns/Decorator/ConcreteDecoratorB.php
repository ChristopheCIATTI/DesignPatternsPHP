<?php

namespace DesignPattern\StructuralPatterns\Decorator;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteDecoratorB extends AbstractDecorator
{
    /**
     * 
     * @var unknown
     */
    private $_decorator;
    
    /**
     * 
     * @param ConcreteComponent $compenent
     */
    public function __construct(ConcreteComponent $compenent)
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Decorator\ConcreteDecoratorB $_component
         */
        $this->_component = $compenent;
        
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Decorator\ConcreteDecoratorB $_decorator
         */
        $this->_decorator = "Concrete Decorator B";
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
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Decorator\AbstractDecorator::getDecorator()
     */
    public function getDecorator()
    {
        return $this->_decorator;
    }
}