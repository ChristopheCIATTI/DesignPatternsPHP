<?php

namespace DesignPattern\StructuralPatterns\Facade;

/**
 * 
 * @author Christophe
 *
 */
class ClientFacade
{
    /**
     * 
     * @var unknown
     */
    private $_facade;
    
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
        $this->makeSubSystem();
        
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Facade\ClientFacade $_facade
         */
        $this->_facade = new Facade();   
        $this->_facade->operate();
    }
    
    private function makeSubSystem()
    {
        $this->_subSystemA = new SubSystemA();
        $this->_subSystemB = new SubSystemB();
        $this->_subSystemC = new SubSystemC();
    }
    
    private function showFacade($facade)
    {
        echo "<pre>";
        echo "show Facade" . "<br/>";
        echo "Facade : " . $facade . "<br/>";
        echo "</pre>";
    }
}
