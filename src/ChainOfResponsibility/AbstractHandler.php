<?php

namespace DesignPattern\BehavioralPatterns\ChainOfResponsibility;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractHandler
{
    /**
     * 
     * @var unknown
     */
    public $_handler = null; 
    
    /**
     * 
     * @param unknown $_handler
     */
    public function setSuccessor($_handler)
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\ChainOfResponsibility\AbstractHandler $_successor
         */
        $this->_handler = $_handler;
    }
    
    /**
     * 
     * @param unknown $_handler
     */
    abstract public function handlerRequest($_handler);
 
}