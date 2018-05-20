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
    }
    
    public function operate()
    {
       $this->showSubSystem($this->_subSystemA->operate());
       $this->showSubSystem($this->_subSystemB->operate());
       $this->showSubSystem($this->_subSystemC->operate());
    }
    
    /**
     * 
     * @param unknown $subSystem
     */
    private function showSubSystem($subSystem)
    {
        echo "<pre>";
        echo "show SubSystem" . "<br/>";
        echo "SubSystem : " . $subSystem . "<br/>";
        echo "</pre>";
    }   
}
