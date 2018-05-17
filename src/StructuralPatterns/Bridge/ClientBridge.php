<?php

/*
 * Client class, the pattern is run here
 */

namespace DesignPattern\StructuralPatterns\Bridge;

/**
 * 
 * @author Christophe
 *
 */
class ClientBridge
{
    /**
     * 
     * @var unknown
     */
    private $_bridge;
    
    public function __construct()
    {
        $this->makeBridgeA();
        $this->makeBridgeB();
    }
    
    private function makeBridgeA()
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Bridge\ClientBridge $_bridge
         */
        $this->_bridge = new RefinedAbstraction(new ConcreteImplementorA());
        $this->showBridge($this->_bridge->operation());
    }
    
    private function makeBridgeB()
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Bridge\ClientBridge $_bridge
         */
        $this->_bridge = new RefinedAbstraction(new ConcreteImplementorB());
        $this->showBridge($this->_bridge->operation());
    }
    
    /**
     * 
     * @param unknown $bridge
     */
    private function showBridge($bridge)
    {
        echo "<pre>";
        echo "show Implementator" . "<br/>";
        echo "Implementator : " . $bridge . "<br/>";
        echo "</pre>";
    }
}
