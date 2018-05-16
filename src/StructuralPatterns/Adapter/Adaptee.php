<?php

/*
 * Adaptee class
 */

namespace DesignPattern\StructuralPatterns\Adapter;

/**
 * 
 * @author Christophe
 *
 */
class Adaptee
{
    /**
     * 
     * @var unknown
     */
    private $_specificRequest;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Adapter\Adaptee $_specificRequest
         */
        $this->_specificRequest = "Specific Request";
    }
    
    /**
     * 
     * @return \DesignPattern\StructuralPatterns\Adapter\unknown
     */
    public function specificRequest()
    {
        return $this->_specificRequest;
    }
}
