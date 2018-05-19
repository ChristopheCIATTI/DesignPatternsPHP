<?php

namespace DesignPattern\StructuralPatterns\Decorator;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteDecoratorA extends AbstractDecorator
{
    /**
     * 
     * @var unknown
     */
    private $_decorator;
    
    /**
     * 
     * @param ConcreteComponent $component
     */
    public function __construct(ConcreteComponent $component)
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Decorator\ConcreteDecoratorA $_component
         */
        $this->_component = $component;
        
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Decorator\ConcreteDecoratorA $_decorator
         */
        $this->_decorator = "Concrete Decorator A";
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