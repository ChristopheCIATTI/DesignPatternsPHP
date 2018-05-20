<?php

namespace DesignPattern\StructuralPatterns\Facade;

/**
 * 
 * @author Christophe
 *
 */
class Facade
{
    /**
     * 
     * @var unknown
     */
    private $_subSystemA;
    
    /**
     * 
     * @var unknown
     */
    private $_subSystemB;
    
    /**
     * 
     * @var unknown
     */
    private $_subSystemC;
    
    private $_facade;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Facade\Facade $_subSystemA
         */
        $this->_subSystemA = new SubSystemA();
        
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Facade\Facade $_subSystemB
         */
        $this->_subSystemB = new SubSystemB();
        
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Facade\Facade $_subSystemC
         */
        $this->_subSystemC = new SubSystemC();
        
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Facade\Facade $_facade
         */
        $this->_facade = [];
    }
    
    /**
     * 
     * @return unknown
     */
    public function operate()
    {
        $this->_facade[] = $this->_subSystemA->operate();
        $this->_facade[] = $this->_subSystemB->operate();
        $this->_facade[] = $this->_subSystemC->operate();     
        return $this->_facade;
    }
}
