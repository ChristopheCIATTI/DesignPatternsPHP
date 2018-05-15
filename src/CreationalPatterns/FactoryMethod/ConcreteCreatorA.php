<?php

/*
 * overrides the factory method to return an instance of a ConcreteProduct. 
 */

namespace DesignPattern\CreationalPatterns\FactoryMethod;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteCreatorA extends AbstractCreator
{
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\CreationalPatterns\FactoryMethod\AbstractCreator::factoryMethod()
     */
    public function factoryMethod()
    {
        return new ConcreteProductA();
    }
}
