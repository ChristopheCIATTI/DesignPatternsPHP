<?php

namespace DesignPattern\CreationalPatterns\Prototype;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractPrototype
{
    abstract public function __construct();
    abstract public function getProduct();
    abstract public function __clone();
}