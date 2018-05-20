<?php

namespace DesignPattern\StructuralPatterns\Facade;

/**
 * 
 * @author Christophe
 *
 */
class SubSystemC
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
         * @var \DesignPattern\StructuralPatterns\Facade\SubSystemC $_subSystem
         */
        $this->_subSystem = "Subsystem class C";
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
