<?php

/*
 * declares the factory method, which returns an object of type Product. 
 * Creator may also define a default implementation of the factory method that returns a default ConcreteProduct object.
 * 
 * may call the factory method to create a Product object. 
 */

namespace DesignPattern\CreationalPatterns\FactoryMethod;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractCreator
{
    abstract function factoryMethod();

}
