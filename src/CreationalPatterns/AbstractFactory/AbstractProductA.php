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
abstract class AbstractProductA
{
    abstract public function __construct();
    abstract public function getProduct() : string ;
}
