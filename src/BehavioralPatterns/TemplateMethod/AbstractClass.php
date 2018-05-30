<?php

namespace DesignPattern\BehavioralPatterns\TemplateMethod;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractClass
{
    /**
     * 
     * @var array
     */
    public $_templateMethod = array();
    
    /**
     * 
     * @return array
     */
    public function TemplateMethod() 
    {
        $this->_templateMethod[] = $this->PrimitiveOperationA();
        $this->_templateMethod[] = $this->PrimitiveOperationB();
        return $this->_templateMethod;
    }
    
    abstract public function PrimitiveOperationA();
    abstract public function PrimitiveOperationB();

}