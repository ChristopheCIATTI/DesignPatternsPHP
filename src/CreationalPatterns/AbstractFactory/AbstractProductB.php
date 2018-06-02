<?php

/*
 * declares an abstract class for a type of product object.
 * 
 *  The product is desccribe here
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
