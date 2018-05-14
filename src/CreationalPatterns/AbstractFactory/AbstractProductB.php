<?php

/*
 * declares an abstract class for a type of product object.
 * 
 *  Here is the exampe A
 */

namespace DesignPattern\CreationalPatterns\AbstractFactory;

/**
 *
 * @author Christophe
 *
 */
abstract class AbstractProductB
{
    abstract function __construct();
    abstract function getProduct() : string ;
}
