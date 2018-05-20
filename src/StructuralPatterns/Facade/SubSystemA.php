<?php

namespace DesignPattern\StructuralPatterns\Facade;

/**
 * 
 * @author Christophe
 *
 */
class SubSystemA
{
    /**
     * 
     * @var unknown
     */
    private $_subSystem;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Facade\SubSystemA $_subSystem
         */
        $this->_subSystem = "Subsystem class A";
    }
    
    /**
     * 
     * @return \DesignPattern\StructuralPatterns\Facade\unknown
     */
    public function operate()
    {
        return $this->_subSystem;
    }
}
