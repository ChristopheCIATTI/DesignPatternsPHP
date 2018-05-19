<?php

namespace DesignPattern\StructuralPatterns\Decorator;

/**
 * 
 * @author Christophe
 *
 */
class ClientDecorator
{
    /**
     * 
     * @var unknown
     */
    private $_component;
    
    /**
     * 
     * @var unknown
     */
    private $_decorator;
    
    public function __construct()
    {
        $this->makeComponent(new ConcreteComponent());
        
        $this->makeDecorator(new ConcreteDecoratorA($this->_component));
        $this->showDecorator($this->_decorator->operation()->operation(), $this->_decorator->getDecorator());
        
        $this->makeDecorator(new ConcreteDecoratorB($this->_component));
        $this->showDecorator($this->_decorator->operation()->operation(), $this->_decorator->getDecorator());
    }
    
    /**
     * 
     * @param AbstractComponent $component
     */
    private function makeComponent(AbstractComponent $component)
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Decorator\ClientDecorator $_component
         */
        $this->_component = $component;
    }
    
    /**
     * 
     * @param AbstractDecorator $decorator
     */
    private function makeDecorator(AbstractDecorator $decorator)
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Decorator\ClientDecorator $_decorator
         */
        $this->_decorator = $decorator;
    }
    
    /**
     * 
     * @param unknown $component
     * @param unknown $decorator
     */
    private function showDecorator($component, $decorator)
    {
        echo "<pre>";
        echo "show Component" . "<br/>";
        echo "Component : " . $component . "<br/>";
        echo "Decorator : " . $decorator . "<br/>";
        echo "</pre>";
    }
}