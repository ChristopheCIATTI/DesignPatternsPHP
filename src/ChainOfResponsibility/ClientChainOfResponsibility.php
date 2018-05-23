<?php

namespace DesignPattern\BehavioralPatterns\ChainOfResponsibility;

/**
 * 
 * @author Christophe
 *
 */
class ClientChainOfResponsibility
{
    /**
     * 
     * @var unknown
     */
    private $_concreteHandlerA;
    
    /**
     * 
     * @var unknown
     */
    private $_concreteHandlerB;
    
    public function __construct()
    {
        $this->makeConcreteHandler();
        $this->makeHandlerRequest();
    }
    
    private function makeConcreteHandler()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\ChainOfResponsibility\ClientChainOfResponsibility $_concreteHandlerA
         */
        $this->_concreteHandlerA = new ConcreteHandlerA();
        
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\ChainOfResponsibility\ClientChainOfResponsibility $_concreteHandlerB
         */
        $this->_concreteHandlerB = new ConcreteHandlerB();
        $this->_concreteHandlerA->setSuccessor($this->_concreteHandlerB);
        $this->_concreteHandlerB->setSuccessor($this->_concreteHandlerA);
    }
    
    private function makeHandlerRequest()
    {
        $this->_concreteHandlerA->handlerRequest("Concrete Handler A");
        $this->showConcreteHandler("ConcreteHandlerA", $this->_concreteHandlerA->handlerRequest("Concrete Handler A"));
        
        $this->_concreteHandlerA->handlerRequest("Concrete Handler B");
        $this->showConcreteHandler("ConcreteHandlerA", $this->_concreteHandlerA->handlerRequest("Concrete Handler B"));
        
        $this->_concreteHandlerB->handlerRequest("Concrete Handler A");
        $this->showConcreteHandler("ConcreteHandlerB", $this->_concreteHandlerB->handlerRequest("Concrete Handler A"));
        
        $this->_concreteHandlerB->handlerRequest("Concrete Handler B");
        $this->showConcreteHandler("ConcreteHandlerB", $this->_concreteHandlerB->handlerRequest("Concrete Handler B"));
    }
    
    /**
     * 
     * @param unknown $concreteClassName
     * @param unknown $concreteHandler
     */
    private function showConcreteHandler($concreteClassName, $concreteHandler)
    {
        echo "<pre>";
        echo "show concreteHandler" . "<br/>";
        echo "Concrete class name : " . $concreteClassName . "<br/>";
        echo "Handler name : " . $concreteHandler . "<br/>";
        echo "</pre>";
    }
}
