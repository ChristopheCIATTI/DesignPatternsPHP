<?php

/*
 * This is a other ConcretrePrototype
 * You can use many 
 */

namespace DesignPattern\CreationalPatterns\Prototype;

/**
 * 
 * @author Christophe
 *
 */
class ConcretePrototypeB extends AbstractPrototype
{
    //Use the prototype variable  
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Prototype\AbstractPrototype::setPlaceOfBirth()
     */
    public function setPlaceOfBirth($placeOfbirth)
    {
        /**
         * 
         */
        $this->placeOfbirth = $placeOfbirth;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Prototype\AbstractPrototype::getPlaceOfBirth()
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfbirth;
    } 
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Prototype\AbstractPrototype::__clone()
     */
    function __clone()
    {} 
}
