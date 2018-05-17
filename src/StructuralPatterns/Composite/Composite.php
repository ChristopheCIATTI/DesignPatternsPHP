<?php

/*
 * This class who manipulate all object
 */

namespace DesignPattern\StructuralPatterns\Composite;

/**
 * 
 * @author Christophe
 *
 */
class Composite implements InterfaceComponent
{
    /**
     * 
     * @var unknown
     */
    private $_composite;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Composite\Composite $_composite
         */
        $this->_composite = array();
    }

    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Composite\InterfaceComponent::operation()
     */
    public function operation()
    {
        foreach ($this->_composite as $composite)
        {
            $composite->operation();
        }
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Composite\InterfaceComponent::add()
     */
    public function add(InterfaceComponent $component)
    {
        $this->_composite[] = $component;
    }

    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Composite\InterfaceComponent::remove()
     */
    public function remove(InterfaceComponent $component)
    {
        foreach ($this->_composite as $key => $row)
        {
            if ($component == $row)
            {
                unset($this->_composite[$key]);
            }
        }
    }

    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Composite\InterfaceComponent::getChild()
     */
    public function getChild()
    {
        return $this->_composite;
    }
    
    


    
    
}
