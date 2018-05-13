<?php

/*
 * AbstractFactory declares an abstract class for operations that create abstract product objects. 
 */

namespace DesignPattern\CreationalPatterns\AbstractFactory;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractFactory
{
    abstract public function createProductA();
    abstract public function createProductB();
}