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
     * @see \DesignPattern\Prototype\AbstractPrototype::setPlaceOfBirth()
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        /**
         * 
         * @var \DesignPattern\Prototype\ConcretePrototypeB $placeOfBirth
         */
        $this->placeOfBirth = $placeOfBirth;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\Prototype\AbstractPrototype::getPlaceOfBirth()
     */
    public function getPlaceOfBirth()
    {
        return $placeOfBirth;
    } 
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\Prototype\AbstractPrototype::__clone()
     */
    function __clone()
    {} 
}
