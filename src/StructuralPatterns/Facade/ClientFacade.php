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
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Facade\ClientFacade $_facade
         */
        $this->_facade = new Facade();
        $this->_facade->operate();
        $this->showFacade($this->_facade->operate());

    }
    
    /**
     * 
     * @param unknown $facade
     */
    private function showFacade($facade)
    {
        foreach ($facade as $value)
        {
            echo "<pre>";
            echo "show SubSystem" . "<br/>";
            echo "SubSystem : " . $value . "<br/>";
            echo "</pre>";
        }
    }
}
