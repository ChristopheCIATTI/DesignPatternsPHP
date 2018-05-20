<?php

namespace DesignPattern\StructuralPatterns\Facade;

/**
 * 
 * @author Christophe
 *
 */
class SubSystemB
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
         * @var \DesignPattern\StructuralPatterns\Facade\SubSystemB $_subSystem
         */
        $this->_subSystem = "Subsystem class B";
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
