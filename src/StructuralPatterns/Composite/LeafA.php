<?php

/*
 * represents leaf objects in the composition.
 */

namespace DesignPattern\StructuralPatterns\Composite;

/**
 * 
 * @author Christophe
 *
 */
class LeafA implements InterfaceComponent
{
    /**
     * 
     * @var unknown
     */
    private $_leaf;
    
    public function __construct()
    {
        $this->_leaf = "leaf A";
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Composite\InterfaceComponent::operation()
     */
    public function operation()
    {
        return $this->_leaf;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Composite\InterfaceComponent::add()
     */
    public function add(InterfaceComponent $component)
    {
        return null;
    }

    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Composite\InterfaceComponent::remove()
     */
    public function remove(InterfaceComponent $component)
    {
        return null;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Composite\InterfaceComponent::getChild()
     */
    public function getChild()
    {
        return null;
    }


    


    
}