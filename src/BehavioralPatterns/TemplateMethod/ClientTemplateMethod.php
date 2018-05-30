<?php

namespace DesignPattern\BehavioralPatterns\TemplateMethod;

/**
 * 
 * @author Christophe
 *
 */
class ClientTemplateMethod
{
    /**
     * 
     * @var unknown
     */
    private $_templateMethod;
    
    public function __construct()
    {
        $this->makeTemplateMethod();    
    }
    
    private function makeTemplateMethod()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\TemplateMethod\ClientTemplateMethod $_templateMethod
         */
        $this->_templateMethod = new ConcreteClass();
        $this->_templateMethod->TemplateMethod();
        
        $this->showTemplateMethod($this->_templateMethod->TemplateMethod());
    }
    
    /**
     * 
     * @param unknown $templateMethod
     */
    private function showTemplateMethod($templateMethod)
    {
        foreach ($templateMethod as $value)
        {
            echo "<pre>";
            echo "show Primitive operation on template method" . "<br/>";
            echo "Primitive opeeration : " . $value . "<br/>";
            echo "</pre>";
        }
    }
}
