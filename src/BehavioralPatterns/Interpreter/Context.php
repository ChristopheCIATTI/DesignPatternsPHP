<?php

namespace DesignPattern\BehavioralPatterns\Interpreter;

/**
 * 
 * @author Christophe
 *
 */
class Context
{
    /**
     * 
     * @var unknown
     */
    private $_context;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Interpreter\Context $_context
         */
        $this->_context = "Context Expression";
    }

    /**
     * 
     * @return \DesignPattern\BehavioralPatterns\Interpreter\unknown
     */
    public function getConctext()
    {
        return $this->_context;
    }
}