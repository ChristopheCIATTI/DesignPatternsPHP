<?php

/*
 * Describe the beavior for children class
 */

namespace DesignPattern\StructuralPatterns\Composite;

/**
 * 
 * @author Christophe
 *
 */
interface InterfaceComponent
{
    public function operation();
    
    /**
     * 
     * @param InterfaceComponent $component
     */
    public function add(InterfaceComponent $component);
    
    /**
     * 
     * @param InterfaceComponent $component
     */
    public function remove(InterfaceComponent $component);
    public function getChild();
}
