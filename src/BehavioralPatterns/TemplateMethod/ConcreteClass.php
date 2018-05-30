<?php

namespace DesignPattern\BehavioralPatterns\TemplateMethod;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteClass extends AbstractClass
{
    /**
     * 
     * @var unknown
     */
    private $_primitiveOperationA;
    
    /**
     * 
     * @var unknown
     */
    private $_primitiveOperationB;

    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\BehavioralPatterns\TemplateMethod\AbstractClass::PrimitiveOperationA()
     */
    public function PrimitiveOperationA()
    {
        return $this->_primitiveOperationA = "Primitive operation A";
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\BehavioralPatterns\TemplateMethod\AbstractClass::PrimitiveOperationB()
     */
    public function PrimitiveOperationB()
    {
        return $this->_primitiveOperationB = "Primitive operation B";
    }

}