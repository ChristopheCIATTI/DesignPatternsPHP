<?php

namespace DesignPattern\CreationalPatterns\FactoryMethod;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractProduct
{
    abstract function __construct();
    abstract function getProduct();
}