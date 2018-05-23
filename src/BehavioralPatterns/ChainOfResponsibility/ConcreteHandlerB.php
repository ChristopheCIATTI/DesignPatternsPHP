<?php

namespace DesignPattern\BehavioralPatterns\ChainOfResponsibility;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteHandlerB extends AbstractHandler
{
    /**
     * 
     * @var unknown
     */
    private $_concreteHandler;
    
    public function __construct()
    {
        $this->_concreteHandler = "Concrete Handler B";
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\BehavioralPatterns\ChainOfResponsibility\AbstractHandler::handlerRequest()
     */
    public function handlerRequest($_handler)
    {
        if ($_handler != $this->_concreteHandler)
        {
            return $this->_handler->handlerRequest($_handler);
        } else {
            return $this->_concreteHandler;
        }
    }

}
