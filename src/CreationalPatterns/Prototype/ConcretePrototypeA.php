<?php

/*
 * This is the concrte prototype,
 * This class use the AbstractProtorype,
 * You can see, all abstract method delcared in AbstractPrototype,
 * is here with params ect...
 */

namespace DesignPattern\CreationalPatterns\Prototype;

/**
 * 
 * @author Christophe
 *
 */
class ConcretePrototypeA extends AbstractPrototype
{
    /*
     * Here I calls the abstract methods in the AbstractPrototypeClass
     */
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Prototype\AbstractPrototype::setPlaceOfBirth()
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Prototype\ConcretePrototypeA $placeOfBirth
         */
        $this->placeOfBirth = $placeOfBirth;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\Prototype\AbstractPrototype::getPlaceOfBirth()
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see AbstractPrototype::__clone()
     */
    public function __clone()
    {
        
    }
}
